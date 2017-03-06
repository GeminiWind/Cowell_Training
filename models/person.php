<?php
class Person
{
    // we define 3 attributes
    // they are public so that we can access them using $post->author directly
    public $id;
    public $name;
    public $birthday;
    public $gender;
    public $telephone;
    public $email;

    public function __construct($id, $name, $birthday, $gender, $telephone, $email)
    {
        $this->id        = $id;
        $this->name      = $name;
        $this->birthday  = $birthday;
        $this->gender    = $gender;
        $this->telephone = $telephone;
        $this->email     = $email;
    }

    public static function all()
    {
        $list = [];
        $db   = Db::getInstance();
        $req  = $db->query('SELECT * FROM persons');

        // we create a list of Post objects from the database results
        foreach ($req->fetchAll() as $person) {
            $list[] = new Person($person['id'],$person['name'],$person['birthday'],$person['gender'],$person['telephone'],$person['email']);

        return $list;
      }
    }

    public static function find($id)
    {
        $db = Db::getInstance();
        $id  = intval($id);
        $req = $db->prepare('SELECT * FROM persons WHERE id = :id');
        $req->execute(array('id' => $id));
        $person = $req->fetch();

        return new Person($person['id'],$person['name'],$person['birthday'],$person['gender'],$person['telephone'],$person['email']);
    }

    public static function destroy($id){
        $isDeleted = false;
        $db = Db::getInstance();
        $id  = intval($id);
        $req = $db->prepare('DELETE FROM persons WHERE id = :id');
        // the query was prepared, now we replace :id with our actual $id value
        $req->execute(array('id' => $id));
        if ( $req->execute(array('id' => $id))){
            $isDeleted =true;
        }
        return $isDeleted;
    }

    public static function store(){
        $db = Db::getInstance();
        // we make sure $id is an integer
        $req = $db->prepare('INSERT INTO  persons VALUES(:name,:email)WHERE id = :id');
        $req->execute(array('id' => $id));
        $person = $req->fetch();

        return new Person($person['id'],$person['name'],$person['birthday'],$person['gender'],$person['telephone'],$person['email']);
    }   


}
