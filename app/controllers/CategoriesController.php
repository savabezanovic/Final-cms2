<?php
namespace App\Controllers;
use \App\Core\App;

class CategoriesController {
    public function index()
    {
        $categories = App::get('database')->getAll('categories');
//        return view('products', compact('products'));
        header('Content-Type: application/json');
        echo json_encode($categories);
        return;
    }

    public function store()
    {
        App::get('database')->insert('categories', [
            'name' => $_POST['name'],
            'completed' => 0
        ]);

        return redirect('categories');
    }
}