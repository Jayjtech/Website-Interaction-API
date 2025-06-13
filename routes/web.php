<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/create-symlink', function () {
    try {
        Artisan::call('storage:link');
        return "Storage symlink created successfully.";
    } catch (Exception $e) {
        return "Failed to create symlink: " . $e->getMessage();
    }
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/email', function(){
    return view('mail_templates.user_get_started');
});