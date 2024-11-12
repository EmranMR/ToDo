<?php

use App\Livewire\Dashboard;
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
    Route::get('/dashboard', Dashboard::class)->name('dashboard');

    Route::prefix('todo/')
        ->name('todo.')
        ->group(function() {
            Route::get('/{todo}/update', ToDoUpdate::class)->name('update');
            Route::get('/{todo}', ToDoShow::class)->name('show');
            Route::get('/archives', ToDoShow::class)->name('archives');
            Route::get('/', ToDoIndex::class)->name('index');
    });
});
