<?php

use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\PostController;
use App\Models\Contact;
use App\Models\Setting;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('site.index');
Route::post('/contact-us', [HomeController::class, 'contactUs'])->name('site.contact.us');
Route::get('/new{id}', [HomeController::class, 'new'])->name('site.new');
View::composer(['*'],function($view){
    view::share('unseenmessages', Contact::orderBy('created_at', 'desc')->where('seen', 0)->get());
    view::share('latestmessages', Contact::orderBy('created_at', 'desc')->get());
    view::share('settings',  Setting::all()->pluck('value', 'key'));

});
