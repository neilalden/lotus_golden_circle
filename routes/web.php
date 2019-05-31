<?php

use Illuminate\Support\Facades\Input;
use App\User;
use App\Member;
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
Route::get('/members/documentary', 'MembersController@documentary');
Route::get('/members/events', 'MembersController@events');
Route::get('/members/finance', 'MembersController@finance');
Route::get('/members/friendship', 'MembersController@friendship');
Route::get('/members/logistics', 'MembersController@logistics');
Route::get('/members/socialmedia', 'MembersController@socialmedia');

Route::post('/search', 'MembersController@search');
Route::get('/about', 'PagesController@about');
Route::get('/dashboard', 'DashboardController@index');
Route::resource('members', 'MembersController');
Route::resource('/', 'EventsController');
Route::resource('events', 'EventsController');
Auth::routes();

