<?php

use App\Livewire\Dashboard;
use App\Livewire\Todo\Archives;
use App\Livewire\Todo\Index as ToDoIndex;
use App\Livewire\Todo\Show as ToDoShow;
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
    // All the routes are Livewire Component based
    // MVVM as such no Controller was required
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::prefix('todo/')
        ->name('todo.')
        ->group(function () {
            Route::get('/archives', Archives::class)->name('archives');
            Route::get('/{todo}/update', ToDoUpdate::class)->name('update');
            Route::get('/{todo}', ToDoShow::class)->name('show');
            Route::get('/', ToDoIndex::class)->name('index');
        });
});
