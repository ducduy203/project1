<?php

use App\Controllers\AdminController;
use App\Controllers\CategoryController;
use App\Controllers\HomeController;
use App\Controllers\ProductController;
use App\Controllers\UserController;
use App\Models\ProductModel;
use App\Router;

require_once __DIR__ . '/../vendor/autoload.php';



$router = new Router();
session_start();

$router::get('/home', [HomeController::class, 'index']);
$router::get('/', [HomeController::class, 'index']);
$router::get('/shop', [HomeController::class, 'shop']);
$router::get('/product-details', [HomeController::class, 'productDetails']);
$router::get('/search', [HomeController::class, 'search']);


$router::get('/login', [UserController::class, 'login']);
$router::post('/login', [UserController::class, 'loginUser']);
$router::get('/register', [UserController::class, 'register']);
$router::post('/register', [UserController::class, 'createUser']);
$router::get('/logout', [UserController::class, 'logout']);



$router::get('/admin', [AdminController::class, 'index']);

$router::get('/list-products', [ProductController::class, 'listProducts']);
$router::get('/create-products', [ProductController::class, 'createProduct']);
$router::post('/create-products', [ProductController::class, 'storeProduct']);
$router::get('/update-products', [ProductController::class, 'showUpdateProduct']);
$router::post('/update-products', [ProductController::class, 'updateProduct']);
$router::get('/delete-products', [ProductController::class, 'deleteProduct']);

$router::get('/list-categories', [CategoryController::class, 'listCategories']);
$router::get('/create-category', [CategoryController::class, 'createCategories']);
$router::post('/create-category', [CategoryController::class, 'storeCategories']);
$router::get('/update-categories', [CategoryController::class, 'showUpdateCategories']);
$router::post('/update-categories', [CategoryController::class, 'updateCategories']);
$router::get('/delete-categories', [CategoryController::class, 'deleteCategories']);

$router::get('/list-users', [UserController::class, 'listUsers']);
$router::get('/add-users', [UserController::class, 'createUsers']);
$router::post('/add-users', [UserController::class, 'storeUsers']);
$router::get('/list-users', [UserController::class, 'listUsers']);
$router::get('/update-users', [UserController::class, 'showUpdateUsers']);
$router::post('/update-users', [UserController::class, 'updateUsers']);
$router::get('/delete-users', [UserController::class, 'deleteUsers']);


$router->resolve();