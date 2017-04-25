<?php
namespace App\Core;
class Router {

    public $routes = [];

    public static function load($file)
    {
        $routes = new static;

        require $file;

        return $routes;
    }
    public function register($routes)
    {
        $this->routes = $routes;
    }

    public function get($route, $controller, $auth = "")
    {

        $this->routes['GET'][$route] = ['controller' => $controller, 'auth' => $auth];
    }

    public function post($route, $controller, $auth = "")
    {

        $this->routes['POST'][$route] = ['controller' => $controller, 'auth' => $auth];
    }

    public function direct($uri, $method) // about/culture
    {

        if(array_key_exists($uri, $this->routes[$method])){

            if($this->routes[$method][$uri]['auth'] == 'auth') {
                AuthGuard::check();
            }

            return $this->callAction(
                ...explode("@", $this->routes[$method][$uri]['controller'])
            );

        }
        throw new Exception('No route found.');

    }

    public function callAction($controller, $method)
    {
        $controller = "\\App\\Controllers\\{$controller}";
        return (new $controller)->$method();
    }
}