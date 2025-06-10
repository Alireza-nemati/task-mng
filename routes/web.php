<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\Tasks::class);
Route::get('tasks', \App\Livewire\Tasks::class)->name('tasks.index');

Route::get('tasks/{task}', \App\Livewire\Task::class)->name('tasks.show');
