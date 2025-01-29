<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/', function () {
    return response()->json([
        'email' => 'vidaforkuo557@example.com',
        'current_datetime' => now()->toIso8601String(),
        'github_url' => 'https://github.com/Kwakuafram/HNG_Stage0_backend.git',
    ]);
});