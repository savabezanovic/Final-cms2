<?php
namespace App\Controllers;
use \App\Core\App;

class StaffController {
    public function index()
    {
        $staf = App::get('database')->getAll('staff');

        header('Content-Type: application/json');
        echo json_encode($staf);
        return;
    }

    public function store()
    {
        App::get('database')->insert('staff', [
            'name' => $_POST['name'],
            'completed' => 0
        ]);

        return redirect('staff');
    }
}