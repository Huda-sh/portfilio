<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RecommendationController;
use App\Http\Controllers\TechnologyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Models\Education;
use App\Models\Experience;

Route::controller(AuthController::class)->prefix('admin')->group(function (){
    Route::get('/', 'login')->name('admin.login');
    Route::post('/', 'CheckUser');
    Route::post('/logout', 'logout')->name('admin.logout');
});

//Route::get('/admin/login', function (){
//    return view('admin.pages.login');
//})->name('login');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'CheckAdmin'], function (){

    Route::get('/dashboard', function (){
        return view('admin.pages.home');
    })->name('dashboard');

    Route::controller(RecommendationController::class)->prefix('recommend')->as('recommend.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::put('/{id}', 'update')->name('update');
        Route::post('/', 'store')->name('store');
        Route::get('/{id}', 'edit')->name('edit');
        Route::delete('/{id}', 'destroy')->name('destroy');
    });

    Route::controller(TechnologyController::class)->prefix('techno')->as('techno.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::put('/{id}', 'update')->name('update');
        Route::post('/', 'store')->name('store');
        Route::get('/{id}', 'edit')->name('edit');
        Route::delete('/{id}', 'destroy')->name('destroy');
    });


    Route::controller(ContactController::class)->prefix('contact')->as('contact.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::put('/{id}', 'update')->name('update');
        Route::post('/', 'store')->name('store');
        Route::get('/{id}', 'edit')->name('edit');
        Route::delete('/{id}', 'destroy')->name('destroy');
    });

    Route::controller(ProjectController::class)->prefix('project')->as('project.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::put('/{id}', 'update')->name('update');
        Route::post('/', 'store')->name('store');
        Route::get('/{id}', 'edit')->name('edit');
        Route::delete('/{id}', 'destroy')->name('destroy');
    });

    Route::controller(EducationController::class)->prefix('education')->as('education.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::put('/{id}', 'update')->name('update');
        Route::post('/', 'store')->name('store');
        Route::get('/{id}', 'edit')->name('edit');
        Route::delete('/{id}', 'destroy')->name('destroy');
    });
    Route::controller(ExperienceController::class)->prefix('experience')->as('experience.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::put('/{id}', 'update')->name('update');
        Route::post('/', 'store')->name('store');
        Route::get('/{id}', 'edit')->name('edit');
        Route::delete('/{id}', 'destroy')->name('destroy');
    });

});

