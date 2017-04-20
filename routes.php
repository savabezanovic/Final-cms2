<?php

$routes->get('', 'PagesController@home');

$routes->get('admin/login', 'AuthController@showLogin');
$routes->post('admin/login', 'AuthController@checkLogin');
$routes->get('admin/logout', 'AuthController@logout');


$routes->get('api/products', 'ProductsController@index');
$routes->post('products', 'ProductsController@store');


$routes->get('admin/products', 'AdminProductsController@index', 'auth');
$routes->get('admin/products/new', 'AdminProductsController@create', 'auth');
$routes->post('admin/products/new', 'AdminProductsController@insert', 'auth');
$routes->get('admin/products/edit', 'AdminProductsController@edit', 'auth');
$routes->post('admin/products', 'AdminProductsController@update', 'auth');
$routes->get('admin/products/delete', 'AdminProductsController@delete', 'auth');

$routes->get('api/staff', 'StaffController@index');
$routes->post('products', 'StaffController@store');

$routes->get('admin/staff', 'AdminStaffController@index', 'auth');
$routes->get('admin/staff/new', 'AdminStaffController@create', 'auth');
$routes->post('admin/staff/new', 'AdminStaffController@insert', 'auth');
$routes->get('admin/staff/edit', 'AdminStaffController@edit', 'auth');
$routes->post('admin/staff', 'AdminStaffController@update', 'auth');
$routes->get('admin/staff/delete', 'AdminStaffController@delete', 'auth');

$routes->get('api/categories', 'CategoriesController@index');
$routes->post('categories', 'CategoriesController@store');


$routes->get('admin/categories', 'AdminCategoriesController@index', 'auth');
$routes->get('admin/categories/new', 'AdminCategoriesController@create', 'auth');
$routes->post('admin/categories/new', 'AdminCategoriesController@insert', 'auth');
$routes->get('admin/categories/edit', 'AdminCategoriesController@edit', 'auth');
$routes->post('admin/categories', 'AdminCategoriesController@update', 'auth');
$routes->get('admin/categories/delete', 'AdminCategoriesController@delete', 'auth');
