<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('main');
});

Route::get('/courses', function () {
    return view('course');
});

Route::get('courses/animation/vfx-prime', function () {
    return view('animation/vfxprime');
});

Route::get('courses/animation/animation-prime', function () {
    return view('animation/animationprime');
});

Route::get('courses/animation/broadcast-prime', function () {
    return view('animation/broadcastprime');
});

Route::get('courses/media/digital-marketing', function () {
    return view('media/digitalmarketing');
});

Route::get('courses/web/web-design', function () {
    return view('web/web-designing');
});

Route::get('courses/web/graphics-and-web-design', function () {
    return view('web/graphics-and-webdesign');
});

Route::get('courses/media/UI-UX', function () {
    return view('media/ui-ux');
});

Route::get('courses/media/print-and-publishing', function () {
    return view('media/print-and-publishing');
});

Route::get('courses/degree/bsc-in-graphics-and-vfx', function () {
    return view('degree/bsc-in-graphics-and-vfx');
});

Route::post('contactForm','App\Http\Controllers\MailController@store');

Route::get('/confirm', function () {
    return view('confirm');
});

Route::get('/contact-us', function () {
    return view('contact');
});

Route::get('/placements', function () {
    return view('placements');
});

