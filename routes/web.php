<?php

/**
|--------------------------------------------------------------------------|
|                               Web Routes                                 |
|--------------------------------------------------------------------------|
**/

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;

Route::get('/', 'WebsiteController@index');
Route::get('/blogs/{id}', 'WebsiteController@findBlog');
Route::get('/contact-us', 'WebsiteController@contactUs');
Route::get('/projects', 'WebsiteController@projects');

Route::post('/contact-question-mail', 'WebsiteController@contactQuestion');
Route::post('/send-footer-mail', 'WebsiteController@footerContactMail');
Route::post('/send-contact', 'WebsiteController@sendContact');

Route::get('/project/{id}', 'WebsiteController@projectView');

Route::get('setlocale/{locale}', function ($locale) {
    if (in_array($locale, Config::get('app.locales'))) {
        Session::put('locale', $locale);
    }
    return redirect()->back();
});
/***
|--------------------------------------------------------------------------|
|                               Admin Routes                               |
|--------------------------------------------------------------------------|
***/




Auth::routes(['register' => false]);

Route::get('/admin', 'HomeController@index')->name('admin');
Route::post('/admin-blogs/update/{id}', 'BlogController@updateBlog');
Route::resource('/admin-blogs', 'BlogController');
