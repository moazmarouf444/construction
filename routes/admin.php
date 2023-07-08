<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FactController;
use App\Http\Controllers\Admin\IntroductionController;
use App\Http\Controllers\Admin\NewController;
use App\Http\Controllers\Admin\QuestionsController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\SettingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['as' => 'admin.', 'middleware' => 'auth:admin', 'prefix' => 'admin'], function () {
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard.index');
    Route::get('profile', [AuthController::class, 'profile'])->name('profile.edit');
    Route::post('profile-update/{id}', [AuthController::class, 'updateProfile'])->name('profile.update');

    Route::group(['as' => 'questions.', 'prefix' => 'common-questions'], function () {
        Route::get('/', [QuestionsController::class, 'index'])->name('index');
        Route::post('/store', [QuestionsController::class, 'store'])->name('store');
        Route::post('/update', [QuestionsController::class, 'update'])->name('update');
        Route::post('/{id}', [QuestionsController::class, 'destroy'])->name('destroy');
    });

    Route::group(['as' => 'introductions.', 'prefix' => 'introductions'], function () {
        Route::get('/edit', [IntroductionController::class, 'edit'])->name('edit');
        Route::post('/update', [IntroductionController::class, 'update'])->name('update');
    });

    Route::group(['as' => 'facts.', 'prefix' => 'facts'], function () {
        Route::get('/', [FactController::class, 'index'])->name('index');
        Route::post('/store', [FactController::class, 'store'])->name('store');
        Route::post('/update', [FactController::class, 'update'])->name('update');
        Route::post('/{id}', [FactController::class, 'destroy'])->name('destroy');
    });


    Route::group(['as' => 'new.company.', 'prefix' => 'new-company'], function () {
        Route::get('/', [NewController::class, 'index'])->name('index');
        Route::post('/store', [NewController::class, 'store'])->name('store');
        Route::post('/update', [NewController::class, 'update'])->name('update');
        Route::post('/{id}', [NewController::class, 'destroy'])->name('destroy');
    });

    Route::group(['as' => 'settings.', 'prefix' => 'settings'], function () {
        Route::get('/', [SettingController::class, 'index'])->name('index');
        Route::put('/update', [SettingController::class, 'update'])->name('update');
    });

    Route::group(['as' => 'reports.', 'prefix' => 'reports'], function () {
        Route::get('/', [ReportController::class, 'index'])->name('index');
        Route::post('/{id}', [ReportController::class, 'destroy'])->name('destroy');
    });
    Route::group(['as' => 'contacts.', 'prefix' => 'contacts'], function () {
        Route::get('/', [ContactController::class, 'index'])->name('index');
        Route::post('/{id}', [ContactController::class, 'destroy'])->name('destroy');
    });


});
Route::group(['prefix' => 'admin'], function () {
    Route::get('login', [AuthController::class, 'login'])->name('admin.login');
    Route::post('post-login', [AuthController::class, 'postLogin'])->name('admin.post.login');
});
