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
Route::get('/bookings/new', 'BookingController@index')->name('bookings/new');
Route::get('/bookings/edit', 'BookingController@index')->name('bookings/edit');

Route::get('/bookings/create', 'BookingController@index')->name('bookings/create');
Route::get('/bookings/update', 'BookingController@index')->name('bookings/update');
Route::get('/bookings/delete', 'BookingController@index')->name('bookings/delete');

// Guests crud
Route::get('/guests/view', 'GuestController@index')->name('guests/view');
Route::get('/guests/new', 'GuestController@index')->name('guests/new');
Route::get('/guests/edit', 'GuestController@index')->name('guests/edit');

Route::get('/guests/create', 'GuestController@index')->name('guests/create');
Route::get('/guests/update', 'GuestController@index')->name('guests/update');
Route::get('/guests/delete', 'GuestController@index')->name('guests/delete');

// Rooms crud
Route::get('/rooms/view', 'RoomsController@index')->name('rooms/view');
Route::get('/rooms/new', 'RoomsController@index')->name('rooms/new');
Route::get('/rooms/edit', 'RoomsController@index')->name('rooms/edit');

Route::get('/rooms/create', 'RoomsController@index')->name('rooms/create');
Route::get('/rooms/update', 'RoomsController@index')->name('rooms/update');
Route::get('/rooms/delete', 'RoomsController@index')->name('rooms/delete');

// Staff crud
Route::get('/staff/view', 'StaffController@index')->name('staff/view');
Route::get('/staff/new', 'StaffController@index')->name('staff/new');
Route::get('/staff/edit', 'StaffController@index')->name('staff/edit');

Route::get('/staff/create', 'StaffController@index')->name('staff/create');
Route::get('/staff/update', 'StaffController@index')->name('staff/update');
Route::get('/staff/delete', 'StaffController@index')->name('staff/delete');

// Settings ru :)
Route::get('/settings/view', 'SettingsController@index')->name('settings/view');
Route::get('/settings/edit', 'Settingsontroller@index')->name('settings/edit');
Route::get('/settings/update', 'SettingsController@index')->name('settings/update');
