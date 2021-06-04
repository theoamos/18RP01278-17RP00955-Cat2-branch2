<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\project1;
use App\Http\Controllers\postController;
use App\Http\Controllers\Controller;
use  App\Http\Controllers\userAuth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//Route::get('/index', function () {
   // return view('index');
//});
Route::get('/front', function () {
    return view('front');
});
Route::get('/addform', function () {
    return view('addform');
});
Route::get('/post-list', function () {
    return view('post-list');

});
Route::get('/bothview', function () {
    return view('bothview');

});

Route::get('/edit-post', function () {
    return view('edit-post');
    
});
Route::get('delete-post', function () {
    return view('delete-post');
    
});

Route::view('form','userview');
Route::post('submit','companie@save');
//insert

//Route::get('newproject',[miniproject::class ,'addform']);
//Route::post('/add',[miniproject::class ,'add'])->name('add');

Route::get('/addform',[postController::class,'addPost'])->name('addform');
Route::post('/addform',[postController::class,'savePost'])->name('save.post');
Route::get('/post-list',[postController::class,'postList'])->name('post.list');
Route::get('/edit-post',[postController::class,'editPost'])->name('post.edit');
Route::get ('/delete-post/{$id}',[postController::class,'deletePost'])->name('post.delete');

Route::post("user",[userAuth::class,'userLogin']);
Route::view("index",'index');
Route::view("profile",'profile');
return redirect('profile');
