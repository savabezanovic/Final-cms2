<?php
namespace App\Controllers;
use \App\Core\App;

class AdminCategoriesController {

    public function index()
    {
        $categories = App::get('database')->getAll('categories');
        return view('admin/categories/index', compact('categories')); //['products' => $products]
    }

    public function edit()
    {
        $id = (int)$_GET['id'];
        $categories = App::get('database')->find('categories', $id);

        return view('admin/categories/edit', compact('categories'));
    }


    public function update()
    {
        if(!isset($_POST['completed'])) {
            $_POST['completed'] = 0;
        }
        App::get('database')->update('categories', $_POST, $_POST['id']);
        return redirect('admin/categories');
    }

    public function delete()
    {
        $id = $_GET['id'];
        App::get('database')->delete('categories',$id);
        return redirect('admin/categories');
    }

    public function create()
    {
        return view('admin/categories/create');
    }

    public function insert()
    {
        App::get('database')->insert('categories', $_POST);

        return redirect('admin/categories');
    }
}
