<?php

use App\Livewire\Todo\Index as ToDoIndex;
use App\Livewire\Todo\Show as ToDoShow;
use App\Livewire\Todo\Create as ToDoCreate;
use App\Livewire\Todo\Update as toDoUpdate;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::prefix('todo/')
        ->name('todo.')
        ->group(function() {
            Route::get('/create', ToDoCreate::class)->name('create');
            Route::get('/update', ToDoUpdate::class)->name('update');
            Route::get('/show', ToDoShow::class)->name('show');
            Route::get('/', ToDoIndex::class)->name('index');
    });
});
