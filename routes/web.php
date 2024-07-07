<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/tenant', function () {
    dd(\App\Models\User::all());
    return 'This is your multi-tenant application. The id of the current tenant is ' . tenant('id');
});

foreach (config('tenancy.central_domains') as $domain) {
    Route::domain($domain)->group(function () {
        foreach (config('tenancy.central_domains') as $domain) {
            Route::domain($domain)->group(function () {
                // your actual routes
            });
        }
    });
}
