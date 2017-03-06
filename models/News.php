<?php
require 'vendor/autoload.php';

use Carbon\Carbon;

class News extends Model
{
    public $id;
    public $title;
    public $content;
    public $sapo;
    public $hit;
    public $tag;
    public $feedback;
    public $is_hot;
    public $is_public;
    public $category_id;
    public $user_id;
    public $censor_id;
    public $comment_id;
    public $published_at;
    public $created_at;
    public $updated_at;

    public static $table = 'news';
    /**
     * [__construct description]
     * @param [type] $id           [description]
     * @param [type] $title        [description]
     * @param [type] $content      [description]
     * @param [type] $sapo         [description]
     * @param [type] $hit          [description]
     * @param [type] $tag          [description]
     * @param [type] $feedback     [description]
     * @param [type] $is_hot       [description]
     * @param [type] $is_public    [description]
     * @param [type] $category_id  [description]
     * @param [type] $user_id      [description]
     * @param [type] $censor_id    [description]
     * @param [type] $comment_id   [description]
     * @param [type] $published_at [description]
     * @param [type] $created_at   [description]
     * @param [type] $updated_at   [description]
     */
    public function __construct(
         $id = null,
         $title,
         $content,
         $sapo,
         $hit =null,
         $tag = null,
         $feedback =null,
         $is_hot = null,
         $is_public = null,
         $category_id,
         $user_id = null,
         $censor_id = null,
         $comment_id = null,
         $published_at = null,
         $created_at,
         $updated_at
    ) {
        if ($id !== null)
        {
            $this->id = $id;
        }
        $this->title        = $title;
        $this->content   = $content;
        $this->sapo    = $sapo;
        if ($hit !== null) {
            $this->hit = $hit;
        }
         if ($tag !== null) {
            $this->tag = $tag;
        }
        if ($feedback !== null) {
            $this->feedback = $feedback;
        }
        if ($is_hot !== null) {
            $this->is_hot = $is_hot;
        }
        if ($is_public !== null) {
            $this->is_public = $is_public;
        }
        $this->category_id = $this->category($category_id);
        if ($user_id !== null) {
            $this->user_id = $user_id;
        }
        if ($censor_id !== null) {
            $this->censor_id = $censor_id;
        }
        if ($comment_id !== null) {
            $this->comment_id = $comment_id;
        }
        if ($published_at !== null) {
            $this->published_at  = Carbon::now()->diffForHumans(Carbon::parse($published_at));
        }
      
        $this->created_at  = Carbon::now()->diffForHumans(Carbon::parse($created_at));
        $this->updated_at  = Carbon::now()->diffForHumans(Carbon::parse($updated_at));

    }

    public function category($id){
        $id = intval($id);
        $category = Category::find($id);
        return $category->name;
    }
    /**
     * [all description]
     * @return [type] [description]
     */
    public static function all()
    {
        $req = parent::all();
        

        // we create a list of Post objects from the database results
        foreach ($req->fetchAll() as $new) {
           

            $news[] = new News($new['id'], $new['title'],$new['content'], $new['sapo'],$new['hit'], $new['tag'],$new['feedback'], $new['is_hot'], $new['is_public'], $new['category_id'],$new['user_id'],$new['censor_id'], $new['comment_id'], $new['published_at'], $new['created_at'], $new['updated_at']);
            
        }
        return $news;
    }

    public static function store($props)
    {
        $new = parent::store($props);
        return new News($new->id, $new->title,$new->content, $new->sapo,$new->hit, $new->tag,$new->feedback, $new->is_hot, $new->is_public, $new->category_id,$new->user_id,$new->censor_id, $new->comment_id, $new->published_at, $new->created_at, $new->updated_at);
    }

    public static function find($id)
    {
        $new = parent::find($id);

        return new News($new['id'], $new['title'],$new['content'], $new['sapo'], $new['hit'], $new['hit'], $new['tag'],$new['feedback'], $new['is_hot'], $new['is_public'], $new['category_id'],$new['censor_id'], $new['comment_id'], $new['published_at'], $new['created_at'], $new['updated_at']);
    }

    public static function update($id, $props)
    {
        $new = parent::update($id, $props);
         return new News($new->id, $new->title,$new->content, $new->sapo,$new->hit, $new->tag,$new->feedback, $new->is_hot, $new->is_public, $new->category_id,$new->user_id,$new->censor_id, $new->comment_id, $new->published_at, $new->created_at, $new->updated_at);
    }

    public static function destroy($id)
    {
        $isDeleted = parent::destroy($id);
        return $isDeleted;
    }

}
