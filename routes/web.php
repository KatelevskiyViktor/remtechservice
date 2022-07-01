<?php



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

Route::get('/', 'MainController@index')->name('home');
Route::get('/gallery', 'MainController@gallery')->name('gallery');
Route::get('/about', 'MainController@about')->name('about');
Route::get('/contacts', 'MainController@contacts')->name('contacts');
Route::match(['get', 'post'],'/send', 'ContactController@send')->name('send');