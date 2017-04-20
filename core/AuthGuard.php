<?php

namespace App\Core;


class AuthGuard
{

    public static function check(){

        if(!$_SESSION['users']) {

            return redirect('admin/login');
        }

        return;
    }

}