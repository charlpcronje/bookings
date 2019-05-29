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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Bookings crud
Route::get('/bookings/view', 'BookingController@index')->name('bookings/view');
Route::get('/bookings/new', 'BookingController@new')->name('bookings/new');
Route::get('/bookings/checkout', 'BookingController@checkout')->name('bookings/checkout');

Route::post('/bookings/store', 'BookingController@store')->name('bookings/store');
Route::post('/bookings/update', 'BookingController@index')->name('bookings/update');
Route::post('/bookings/delete', 'BookingController@index')->name('bookings/delete');

// Guests crud
Route::get('/guests/view', 'GuestController@index')->name('guests/view');
Route::get('/guests/new', 'GuestController@new')->name('guests/new');
Route::get('/guests/edit', 'GuestController@edit')->name('guests/edit');
Route::get('/guests/autocomplete', 'GuestController@autocomplete')->name('guests/autocomplete');

Route::post('/guests/store', 'GuestController@store')->name('guests/store');
Route::post('/guests/update', 'GuestController@index')->name('guests/update');
Route::post('/guests/delete', 'GuestController@index')->name('guests/delete');

// Rooms crud
Route::get('/rooms/view', 'RoomsController@index')->name('rooms/view');
Route::get('/rooms/new', 'RoomsController@index')->name('rooms/new');
Route::get('/rooms/edit', 'RoomsController@index')->name('rooms/edit');

Route::post('/rooms/create', 'RoomsController@index')->name('rooms/create');
Route::post('/rooms/update', 'RoomsController@index')->name('rooms/update');
Route::post('/rooms/delete', 'RoomsController@index')->name('rooms/delete');

// Staff crud
Route::get('/staff/view', 'StaffController@index')->name('staff/view');
Route::get('/staff/new', 'StaffController@index')->name('staff/new');
Route::get('/staff/edit', 'StaffController@index')->name('staff/edit');

Route::post('/staff/create', 'StaffController@index')->name('staff/create');
Route::post('/staff/update', 'StaffController@index')->name('staff/update');
Route::post('/staff/delete', 'StaffController@index')->name('staff/delete');

// Settings ru :)
Route::get('/settings/view', 'SettingsController@index')->name('settings/view');
Route::get('/settings/edit', 'Settingsontroller@index')->name('settings/edit');
Route::get('/settings/update', 'SettingsController@index')->name('settings/update');
