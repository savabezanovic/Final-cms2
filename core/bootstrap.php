<?php

use App\Core\App;

App::bind('config', require 'config.php');

App::bind('database',  new QueryBuilder(
    Connection::make(App::get('config')['database'])
));

session_start();

function view($name, $data = []) {

    extract($data);

    return require "app/views/{$name}.view.php";
}

function redirect($url) {
    header("Location: /{$url}");
}