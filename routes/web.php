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


Route::get('/', function() {
    return redirect()->route('login');
});

// Laravel Auth Package Routes
Auth::routes();
//Auth::routes(['verify' => true]);

Route::get('/login', 'LoginController@login')->name('login');
Route::get('/logout', 'LoginController@logout')->name('logout');

// Register Route
Route::get('/register', 'LoginController@register_form')->name('register');
Route::post('/register', 'LoginController@register')->name('register');



Route::group(['middleware' => ['auth']], function () {

    //Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    //Route::get('companies', 'CompaniesController@index')->name('companies');
    //Route::get('companies', [ ProductCategory::class, 'render' ])->name('companies');
    //Route::get('news', 'NewsController@index')->name('news');
    //Route::get('add_news', 'NewsController@addNews')->name('news.add');
    Route::post('add_news', 'NewsController@saveNews')->name('news.add');

    Route::get('dashboard', function (){
        if(\Illuminate\Support\Facades\Auth::check()){
            return redirect()->route('companies');
        }
        return redirect()->route('login');
    })->name('dashboard');

    Route::get('companies', function (){
        return view('content');
    })->name('companies');

    Route::get('news', function (){
        return view('content');
    })->name('news');

    Route::get('add_news', function (){
        return view('content');
    })->name('news.add');


});
