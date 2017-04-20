<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit52c35b76280ec3e6f8aa7955b86c5a18
{
    public static $classMap = array (
        'App\\Controllers\\AdminCategoriesController' => __DIR__ . '/../..' . '/app/controllers/AdminCategoriesController.php',
        'App\\Controllers\\AdminProductsController' => __DIR__ . '/../..' . '/app/controllers/AdminProductsController.php',
        'App\\Controllers\\AdminStaffController' => __DIR__ . '/../..' . '/app/controllers/AdminStaffController.php',
        'App\\Controllers\\AuthController' => __DIR__ . '/../..' . '/app/controllers/AuthController.php',
        'App\\Controllers\\CategoriesController' => __DIR__ . '/../..' . '/app/controllers/CategoriesController.php',
        'App\\Controllers\\PagesController' => __DIR__ . '/../..' . '/app/controllers/PagesController.php',
        'App\\Controllers\\ProductsController' => __DIR__ . '/../..' . '/app/controllers/ProductsController.php',
        'App\\Controllers\\StaffController' => __DIR__ . '/../..' . '/app/controllers/StaffController.php',
        'App\\Core\\App' => __DIR__ . '/../..' . '/core/App.php',
        'App\\Core\\AuthGuard' => __DIR__ . '/../..' . '/core/AuthGuard.php',
        'App\\Core\\Request' => __DIR__ . '/../..' . '/core/Request.php',
        'App\\Core\\Router' => __DIR__ . '/../..' . '/core/Router.php',
        'App\\Core\\Task' => __DIR__ . '/../..' . '/core/Task.php',
        'ComposerAutoloaderInit52c35b76280ec3e6f8aa7955b86c5a18' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit52c35b76280ec3e6f8aa7955b86c5a18' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit52c35b76280ec3e6f8aa7955b86c5a18::$classMap;

        }, null, ClassLoader::class);
    }
}