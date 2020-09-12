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

Route::get('/','WebController@index')->name('index');
Route::get('/our-works','WebController@ourworks')->name('our-works');
Route::get('/our-team','WebController@ourteam')->name('our-team');
Route::get('/our-blog','WebController@ourblog')->name('our-blog');
Route::get('/contact-us','WebController@contactus')->name('contact-us');
Route::post('/submit-contact-form','WebController@submitcontact')->name('submitcontact');
Route::get('/about-us', 'WebController@aboutus')->name('aboutus'); 


Auth::routes();

//  Route::get('/home', function () {
//      return view('dashboard.home');
//  });



Route::group(['middleware' => ['auth']],function(){ 

    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('works', 'WorkController');
    Route::resource('posts','BlogController');
    Route::resource('contacts','ContactController');
  
    // Route::match(['get', 'post'], '/login',  'AdminController@login')->name('login');

    //Route::get('/home',['as' => 'dashboard', 'uses' => 'AdminController@dashboard']);

    Route::get('/logout','AdminController@logout');

    Route::resource('admins','AdminController');
    Route::get('/setting','AdminController@setting')->name('setting');
});

