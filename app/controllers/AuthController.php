<?php
namespace App\Controllers;

use App\Core\App;

class AuthController {

    public function showLogin()
    {
        return view('admin/adminLogin');
    }

    public function checkLogin()
    {

        $users = App::get('database')->authenticate($_POST['username'], $_POST['password']);
        if(isset($users)) {
            $_SESSION['users'] = $users;
            return redirect('admin/products');

        } else {

            $_SESSION['users'] = "";
            return redirect('admin/login');
        }

    }

    public function logout()
    {
        unset($_SESSION['users']);
        session_destroy();
        return redirect('admin/login');
    }
    
    
}