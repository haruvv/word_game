<?php

use App\Http\Controllers\ContentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MessageController;
use App\Models\User;
use GuzzleHttp\Psr7\Request;
// use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\View as FacadesView;

Route::get('/', [UserController::class, 'index']);

Route::get('k', function () {
    $users = User::all();
    return View::make('index')->with('index', $users);
    //return FacadesView::make('users')->with('users', $users);
});

Route::post('/submit', [MessageController::class, 'index']);

Route::get('/contents', [ContentController::class, 'index']);

