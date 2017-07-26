<?php

Route::group(['middleware' => ['auth'], 'prefix' => 'admincon', 'namespace' => 'admin'], function () {

//Route::get('/logout', '\App\Http\Controllers\Auth\RegisterController@logout');
//Auth::routes();
Route::post('/logout', '\App\Http\Controllers\Auth\RegisterController@logout');
Route::get('/', 'HomeController@index');
Route::get('/adminhome', 'HomeController@index')->name('adminhome');
//banner
Route::resource('banners', 'BannerController');
//testimonials
Route::resource('testimonials', 'TestimonialController');
//Project
Route::resource('projects', 'ProjectsController');
//Services
Route::resource('services', 'ServicesController');
//rooms
Route::post('delRoomImage', 'RoomsController@del_pic')->name("delRoomImage");
Route::resource('rooms', 'RoomsController');
//Route::get('rooms', 'RoomController@index');


//about
Route::resource('about', 'AboutController');
//team
Route::resource('team', 'TeamController');
//Event
Route::post('delEventImage', 'EventController@del_pic')->name("delEventImage");
Route::resource('events', 'EventController');
//Pages
Route::resource('pages', 'PageController');
//Gallery
Route::post('delGalleryImage', 'GalleryController@del_pic')->name("delGalleryImage");
Route::resource('gallery', 'GalleryController');
});