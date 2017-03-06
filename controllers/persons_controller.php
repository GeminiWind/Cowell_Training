
<?php
  class PersonsController {
    public function index() {
      // we store all the posts in a variable
      $persons = Person::all();
      require_once('views/persons/index.php');
    }

    public function show() {
      // we expect a url of form ?controller=posts&action=show&id=x
      // without an id we just redirect to the error page as we need the post id to find it in the database
      if (!isset($_GET['id']))
        return call('pages', 'error');

      // we use the given id to get the right post
      $post = Person::find($_GET['id']);
      require_once('views/persons/show.php');
    }

    public function edit(){
        if (!isset($_GET['id']))
        return call('pages', 'error');

      // we use the given id to get the right post
      $person = Person::find($_GET['id']);
      require_once('views/persons/edit.php');
    }

    public function destroy(){
      if (!isset($_GET['id']))
        return call('pages', 'error');

      // we use the given id to get the right post
      $isDeleted = Person::destroy($_GET['id']);
      require_once('views/persons/delete.php');
    }
  }
?>