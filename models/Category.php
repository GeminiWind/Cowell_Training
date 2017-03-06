<?php

require 'vendor/autoload.php';

use Carbon\Carbon;

class Category extends Model
{
   
    public $id;
    public $name;
    public $parent_id;
    public $newsCount;
    public $name_seo;
    public $keyword_seo;
    public $description;
    public $is_public;
    public $created_at;
    public $updated_at;

    public static $table = 'categories';

    public function __construct(
        $id,
        $name,
        $parent_id = null,
        $newsCount,
        $name_seo = null,
        $keyword_seo = null,
        $description = null,
        $is_public,
        $created_at,
        $updated_at
    ) {
        $this->id          = $id;
        $this->name        = $name;
        if ($parent_id !== null) {
            $this->parent_id   = $this->getParentName($parent_id);
        }
        $this->newsCount = $newsCount;
        if ($name_seo !== null) {
            $this->name_seo   = $name_seo;
        }
         if ($keyword_seo !== null) {
            $this->keyword_seo   = $keyword_seo;
        }
         if ($description !== null) {
            $this->description   = $description;
        }
        if ($is_public == 0) {
             $this->is_public   = 'Private';
        } else {
            $this->is_public   = 'Public';
        }
       
        $this->created_at  = Carbon::now('Asia/Ho_Chi_Minh')->diffForHumans(Carbon::parse($created_at));
        $this->updated_at  = Carbon::now('Asia/Ho_Chi_Minh')->diffForHumans(Carbon::parse($updated_at));
    }

    public function getParentName($parentId){
        $parent = parent::find($parentId);
        return $parent['name'];
    }

    public static function all()
    {
        $req = parent::all();
        // we create a list of Post objects from the database results
        foreach ($req->fetchAll() as $category) {
            $categories[] = new Category($category['id'], $category['name'], $category['parent_id'],$category['news_count'], $category['name_seo'], $category['keyword_seo'],$category['description'], $category['is_public'], $category['created_at'], $category['updated_at']);   
        }
        return $categories;
    }

    public static function store($props)
    {
        $category = parent::store($props);
        $category = new Category($category->id, $category->name, $category->parent_id,$category->newsCount, $category->name_seo, $category->keyword_seo,$category->description, $category->is_public, $category->created_at, $category->updated_at);
        return $category;
       
    }

    public static function find($id)
    {
        $objectResult = parent::find($id);

        return new Category($objectResult['id'], $objectResult['name'], $objectResult['parent_id'],$objectResult['news_count'], $objectResult['name_seo'], $objectResult['keyword_seo'],$objectResult['description'], $objectResult['is_public'], $objectResult['created_at'], $objectResult['updated_at']);
    }

    public static function update($id, $props)
    {
        $category = parent::update($id, $props);
        $category = new Category($category->id, $category->name, $category->parent_id,$category->newsCount, $category->name_seo, $category->keyword_seo,$category->description, $category->is_public, $category->created_at, $category->updated_at);
        return $category;
    }

    public static function destroy($id)
    {
        $isDeleted = parent::destroy($id);
        return $isDeleted;
    }

    public static function pagnitate($limit){
        $req = parent::pagnitate($limit);
        // we create a list of Post objects from the database results
        foreach ($req->fetchAll() as $category) {
            $categories[] = new Category($category['id'], $category['name'], $category['parent_id'],$category['news_count'], $category['name_seo'], $category['keyword_seo'],$category['description'], $category['is_public'], $category['created_at'], $category['updated_at']);   
        }
        return $categories;
    }

    public static function pagnitationCount($limit){
        return parent::pagnitationCount($limit);
    }

}
