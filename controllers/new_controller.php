<?php
require dirname(__FILE__) . '/BaseController.php';

class NewController implements BaseController
{
    /**
     * [Display a listing of resource]
     * @return [type] [description]
     */
    public function index()
    {
        $news = News::all();
        require_once 'views/admin/news/index.php';
    }

    /**
     * Display a form to create a new resouce
     * @return [type] [description]
     */
    public function create()
    {
        $categories = Category::all();
        require_once 'views/admin/news/create.php';
    }

    /**
     * Store a new resouce into storage
     * @return [type] [description]
     */
    public function store()
    {
        if (!isset($_POST)) {
            return call('pages', 'error');
        }
        $news = News::store($_POST);
        if ($news !== null) {
            header('Location: /?controller=new&action=index');
        }
    }

    /**
     * Display the specified resource
     * @return [type] [description]
     */
    public function show()
    {
        if (!isset($_GET['id'])) {
            return call('pages', 'error');
        }
        $new = News::find($_GET['id']);
        require_once 'views/admin/news/show.php';
    }

    /**
     * Dispay a form to edit the specified resource
     * @return [type] [description]
     */
    public function edit()
    {
        if (!isset($_GET['id'])) {
            return call('pages', 'error');
        }
        $new        = News::find($_GET['id']);
        $categories = Category::all();
        require_once 'views/admin/news/edit.php';
    }

    /**
     * Update the specified resource
     * @return [type] [description]
     */
    public function update()
    {
        if (!isset($_GET['id'])) {
            return call('pages', 'error');
        }
        $new = News::update($_GET['id'], $_POST);
        if ($category !== null) {
            header('Location: /?controller=new&action=index');
        }
    }

    /**
     * Delete the specified resorce
     * @return [type] [description]
     */
    public function destroy()
    {
        if (!isset($_GET['id'])) {
            return call('pages', 'error');
        }
        $isDeleted = News::destroy($_GET['id']);
        if ($isDeleted === true) {
            header('Location: /?controller=new&action=index');
        }
    }

}
