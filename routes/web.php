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

Route::get('/gallery', 'GalleryController@gallery')->name('gallery');
Route::get('/gallery/{category}', 'GalleryController@gallery_category')->name('gallery.category');
Route::get('/gallery/{category}/{subcat}', 'GalleryController@gallery_subcat_photos')->name('gallery.subcat');

Route::get('/about', 'MainController@about')->name('about');
Route::get('/contacts', 'MainController@contacts')->name('contacts');
Route::get('/reload', 'MainController@reload');
Route::match(['get', 'post'],'/send', 'ContactController@send')->name('send');
Route::post('/send-from-footer', 'ContactController@SendFromFooter')->name('send.from.footer');
