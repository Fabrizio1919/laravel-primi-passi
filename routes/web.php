<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $message = 'Hello World';
    return view('index',compact('message'));
});

Route::get('/about', function () {
    $message = 'Hello World';
    return view('about',compact('message'));
});

Route::get('/news', function () {
    $message = 'Hello World';
    return view('news',compact('message'));
});

Route::get('/collections', function () {
    $message = 'Hello World';
    return view('collections',compact('message'));
});

Route::get('/contact', function () {
    $message = 'Hello World';
    return view('contact',compact('message'));
});