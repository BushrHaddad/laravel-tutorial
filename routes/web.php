<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Sermons\SermonController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SocialController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

Route::get('/', function () {
    $data=[];
    $data['name'] ='Hussam';
    $data['age'] = 24;
    return view('front\welcome',$data);
});

Route::get('login',function(){
    return 'must login';
})->name('login');


//Group 
Route::group(['prefix' => 'sermons'], function(){
    Route::get('', [SermonController::class, 'index'])->name('sermons');
    Route::get('update/{user_id}', [SermonController::class, 'update']);
    Route::get('delete/{user_id}', [SermonController::class, 'delete']);
});

// Resource
Route::resource('news', NewsController::class);

Auth::routes(['verify' => true]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

