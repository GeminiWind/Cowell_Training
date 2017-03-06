<?php
require dirname(__FILE__) . '/BaseController.php';

class CategoryController implements BaseController
{
    /**
     * [Display a listing of resource]
     * @return [type] [description]
     */
    public function index()
    {
        $categories = Category::all();
        require_once 'views/admin/category/index.php';
    }

    /**
     * [Dispay a form to store a new resource]
     * @return [type] [description]
     */
    public function create()
    {

        $categories = Category::all();

        require_once 'views/admin/category/create.php';
    }

    /**
     * [Store a new resouce into storage]
     * @return [type] [description]
     */
    public function store()
    {
        if (!isset($_POST)) {
            return call('pages', 'error');
        }
        $category = Category::store($_POST);
        if ($category !== null) {
            header('Location: /?controller=category&action=index');
        } else {
            header('Location: /?controller=category&action=create');
        }

    }

    /**
     * [Display the specified resource]
     * @return [type] [description]
     */
    public function show()
    {
        if (!isset($_GET['id'])) {
            return call('pages', 'error');
        }
        $category = Category::find($_GET['id']);
        require_once 'views/category/show.php';
    }

    /**
     * Display a form to edit the specified resource
     * @return [type] [description]
     */
    public function edit()
    {
        if (!isset($_GET['id'])) {
            return call('pages', 'error');
        }

        $categories = Category::all();
        $category   = Category::find($_GET['id']);
        require_once 'views/admin/category/edit.php';
    }

    /**
     * Update sepcified resource
     * @return [type] [description]
     */
    public function update()
    {
        if (!isset($_GET['id'])) {
            return call('pages', 'error');
        }
        if (!isset($_POST)) {
            return call('pages', 'error');
        }
        $category = Category::update($_GET['id'], $_POST);
        if ($category !== null) {
            header('Location: /?controller=category&action=index');
        }
    }
    /**
     * Delete the specified resource
     * @return [type] [description]
     */
    public function destroy()
    {
        if (!isset($_GET['id'])) {
            return call('pages', 'error');
        }
        $isDeleted = Category::destroy($_GET['id']);
        if ($isDeleted === true) {
            header('Location: /?controller=category&action=index');
        }
    }

    public function pagnitate($limit = 5)
    {
        $categories = Category::pagnitate($limit);
        $totalPage  = Category::pagnitationCount($limit);
        require_once 'views/admin/category/pagnitate.php';
    }

}
