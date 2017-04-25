<?php
namespace App\Controllers;
use \App\Core\App;

class AdminProductsController {

    public function index()
    {
        $products = App::get('database')->getAllProducts();
        return view('admin/products/index', compact('products')); //['products' => $products]
    }


    public function edit()
    {


        $id = (int)$_GET['id'];
        $products = App::get('database')->find('products', $id);
        $categories = App::get('database')->getAll('categories');

        return view('admin/products/edit', compact('products', 'categories'));
    }


    public function update()
    {
        if(!isset($_POST['completed'])) {
            $_POST['completed'] = 0;
        }
        App::get('database')->update('products', $_POST, $_POST['id']);
        return redirect('admin/products');
    }

    public function delete()
    {
        $id = $_GET['id'];
        App::get('database')->delete('products',$id);
        return redirect('admin/products');
    }

    public function create()
    {
        $categories = App::get('database')->getAll('categories');

        return view('admin/products/create', compact('categories'));
    }

    public function insert()
    {
        App::get('database')->insert('products', $_POST);

        return redirect('admin/products');
    }

}
