<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;


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

Route::get('/login',function(){
    return view("login");
});

Route::get('/contact',function(){
    return view("contact");
});

Route::get('/register',function(){
    return view("registration");
});

Route::get('/', [PagesController::class,'home'])->name('home');

Route::get('/contact/public',[PagesController::class,'contact'])->name('contact');
Route::get('/registration',[PagesController::class,'myprofile'])->name('profile');

 Route::get('/login',[PagesController::class,'login'])->name('Log_In');
// Route::post('/registration','PagesController@registration');


// Route::post('/register','PagesController@register');

// Route::get('/contact','PagesController@contact')->name('Contact');

Route::get('/person/create',[PagesController::class,'create'])->name('person.create');
Route::post('/person/create',[PagesController::class,'createSubmit'])->name('person.create');
Route::get('/person/list',[PagesController::class,'list'])->name('person.list');
Route::get('/person/edit/{id}/{name}',[PagesController::class,'edit']);
