<?php

use Illuminate\Support\Facades\Route;
Route::get('/', App\Livewire\Home::class)->name('home');
Route::get('/students', App\Livewire\Students\Index::class)->name('students.index');
