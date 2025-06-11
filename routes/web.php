<?php


use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\Tasks::class);
Route::get('tasks', \App\Livewire\Tasks::class)->name('tasks.index');


Route::get('tasks/create', \App\Livewire\CreateTask::class)->name('tasks.create');
Route::get('tasks/{task}', \App\Livewire\Task::class)->name('tasks.show');
Route::get('tasks/{task}/edit', \App\Livewire\TaskEdit::class)->name('tasks.edit');

