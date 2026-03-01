<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;

Route::inertia('/', 'welcome', [
    'canRegister' => Features::enabled(Features::registration()),
])->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';

Route :: get('/',function(){
    return "fuck  page ";
});


Route :: get('/demo',function(){
    return view ('Demo');
});
route:: any('/test',function(){
echo "testing the Route";
});