<?php

use App\Http\Controllers\SuperUser\PostController;
use Illuminate\Support\Facades\Route;

// Суперпользователь role === 2
Route::prefix('dashboard-superuser')->name('dashboard-superuser.')->group(function(){
    Route::middleware(['auth', 'verified', 'superUser'])->group(function(){
        // Маршрут, который открывает главную страницу в авторизированном профиле
        Route::get('/', function(){
            return view('dashboard-superuser');
        })->name('home');

        // Маршрут, который открывает страницы связанные с моделью Post
        Route::controller(PostController::class)->prefix('post')->group(function(){
            Route::get('/index', 'index')->name('post.index');
            Route::get('/create', 'create')->name('post.create');
        });
    });
});
