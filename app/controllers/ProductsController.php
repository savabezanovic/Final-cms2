<?php
namespace App\Controllers;
use \App\Core\App;

class ProductsController {
    public function index()
    {
        if (isset($_GET['id'])) {
            $products = App::get('database')->getAllProducts($_GET['id']);
        } else {
            $products = App::get('database')->getAllProducts();
        }

//        return view('products', compact('products'));
        header('Content-Type: application/json');
        echo json_encode($products);
        return;
    }

    public function store()
    {
        App::get('database')->insert('products', [
            'name' => $_POST['name'],
            'completed' => 0
        ]);

        return redirect('products');
    }
}