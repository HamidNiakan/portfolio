<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\Web\Index::class)->name('index');
