<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminLayoutController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

route::controller(PageController::class)->group(function (){
         route::get('/', 'home')->name('home');
         route::get('Products', 'products')->name('products');
});
route::controller(AdminLayoutController::class)->group(function (){
     route::get('content', 'content')->name('content');
     route::post('productInput', 'productSubmit')->name('product.submit');
     route::get('userlist', 'userList')->name('user.list');
     route::get('userDelete/{id}', 'userDelete')->name('user.delete');
});
