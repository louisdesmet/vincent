<?php
use App\Navigation;
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

Route::get('/', 'DisplayController@frontpage')->name('frontpage');




Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard')->middleware('auth');
Route::resource('page', 'PageController')->middleware('auth');
Route::resource('navigation', 'NavigationController')->middleware('auth');

foreach (Navigation::all() as $navigation) {
    Route::get('/{'.$navigation->name.'}', 'DisplayController@show')->name($navigation->name);
}

