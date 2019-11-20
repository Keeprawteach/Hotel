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

Route::group(['middleware' => ['web']], function() {

  Route::get('admin/login', 'Auth\LoginController@getLogin');
  Route::post('admin/login', 'Auth\LoginController@postLogin');
  Route::post('login', 'Auth\LoginController@postLogin');
  Route::get('login', ['as' => 'login', 'uses' => 'Auth\LoginController@getLogin']);
  Route::get('logout', 'Auth\LoginController@logout')->name('logout');
  Route::post('logout', 'Auth\LoginController@logout')->name('logout');
  Route::get('admin/register', 'Auth\RegisterController@getRegister');
  Route::post('admin/register', 'Auth\RegisterController@postRegister');

  Route::get('password/reset/{token?}', 'Auth\ResetPasswordController@showResetForm');
  Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
  Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.reset');
  // Password Reset Routes...
  //  Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('admin.password.email');
  //  Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
  //  Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('admin.password.token');
  //  Route::post('password/reset', 'Auth\ResetPasswordController@reset');

  Route::get('/', 'PagesController@getIndex');

  Route::get('contact', 'PagesController@getContact');
  Route::get('#about', 'PagesController@getAbout');

  Route::get('admin', function () {
    return view('admin_template');
  });
  Route::resource('admin/menu', 'MenuController');
  Route::resource('admin/category', 'CategoryController');
  Route::resource('admin/customer', 'CustomerController');
  Route::resource('admin/promotion', 'PromotionController');
  Route::resource('admin/desk', 'DeskController');
  Route::resource('admin/order', 'OrderController');
  Route::resource('admin/place_order', 'PlaceOrderController');
  Route::resource('admin/delivery_order', 'DeliveryOrderController');
});

// Auth::routes();
