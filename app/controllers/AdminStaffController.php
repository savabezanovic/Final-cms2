<?php
namespace App\Controllers;
use \App\Core\App;

class AdminStaffController {

    public function index()
    {
        $staff = App::get('database')->getAll('staff');
        return view('admin/staff/index', compact('staff')); //['products' => $products]
    }

    /*
     * Displays edit form
     */
    public function edit()
    {
        $id = (int)$_GET['id'];
        $staff = App::get('database')->find('staff', $id);

        return view('admin/staff/edit', compact('staff'));
    }

    /*
    Update the task
    */
    public function update()
    {
        if(!isset($_POST['completed'])) {
            $_POST['completed'] = 0;
        }
        App::get('database')->update('staff', $_POST, $_POST['id']);
        return redirect('admin/staff');
    }

    public function delete()
    {
        $id = $_GET['id'];
        App::get('database')->delete('staff',$id);
        return redirect('admin/staff');
    }

    public function create()
    {
        return view('admin/staff/create');
    }

    public function insert()
    {
        App::get('database')->insert('staff', $_POST);

        return redirect('admin/staff');
    }
}
