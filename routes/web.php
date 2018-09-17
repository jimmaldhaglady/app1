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

Route::get('/', 'WelcomeController@index')->name('home');

Route::get('/about', 'WelcomeController@about')->name('about');
Route::get('/md-message', 'WelcomeController@mdMessage')->name('md-message');
Route::get('/Courses', 'WelcomeController@courses')->name('Courses');
Route::get('/Academy', 'WelcomeController@academy')->name('Academy');
//Route::get('/Gallery', 'WelcomeController@gallery')->name('gallery');
Route::get('/Facilities', 'WelcomeController@facilities')->name('Facilities');
Route::get('/demoClass', 'WelcomeController@demoClass')->name('demoClass');
Route::get('/faculty', 'WelcomeController@faculty')->name('faculty');
//Route::get('/batchs', 'WelcomeController@batchs')->name('batchs');
Route::get('/Contact', 'WelcomeController@contact')->name('contact');
Route::resource('photo-gallery', 'GalleryController');
Route::get('/ca-bcom', 'WelcomeController@ca')->name('ca');
Route::get('/cma-bcom', 'WelcomeController@cma')->name('cma');
Route::get('/cs-bcom', 'WelcomeController@cs')->name('cs');
Route::get('/professional-bcom', 'WelcomeController@prfb')->name('prfb');
Route::get('/results', 'WelcomeController@results')->name('results');
Route::get('/downloads', 'WelcomeController@downloads')->name('downloads');
Route::get('/onam', 'WelcomeController@onam')->name('onam');
Route::get('/xmas', 'WelcomeController@xmas')->name('xmas');
Route::get('/tour', 'WelcomeController@tour')->name('tour');
Route::get('/award', 'WelcomeController@award')->name('award');
Route::get('/onam15', 'WelcomeController@onam15')->name('onam15');
Route::get('/onam14', 'WelcomeController@onam14')->name('onam14');
Route::get('/video', 'WelcomeController@video')->name('video');
Route::get('/inauguration', 'WelcomeController@inauguration')->name('inauguration');
Route::get('/otherimage', 'WelcomeController@otherimage')->name('otherimage');
Route::get('/addgallery', 'WelcomeController@newgallerycategory')->name('adgallery');

Route::resource('contact-us', 'ContactController');
Route::resource('Apply_Online', 'ApplyOnlineController');
Route::resource('admincourses', 'CoursesController');
Route::resource('batchs-timing', 'BatchController');
Route::resource('batchstiming', 'BatchController');
//Route::resource('test', 'BatchController');
Route::resource('Gallery', 'GalleryController');
Route::resource('Faculty', 'FacultyController');

Auth::routes();
Route::any('/home', 'HomeController@index')->name('adminhome');
Auth::routes();
