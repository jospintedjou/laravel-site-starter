 <?php

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
//Clear Config cache:
Route::get('/clear', 'CacheController@clear')->name('clear');
Route::get('/cache', 'CacheController@cache')->name('cache');

Route::get('/', 'SiteController@index')->name('home');
Route::get('/a-propos', 'SiteController@about')->name('about');
Route::get('/contact', 'SiteController@contact')->name('contact');
Route::get('/services', 'SiteController@services')->name('services');
Route::get('/blog', 'SiteController@blog')->name('blog');
Route::get('/blog/{slug}', 'SiteController@article')->name('article');
Route::post('/contact', 'SiteController@contactUs')->name('contact');