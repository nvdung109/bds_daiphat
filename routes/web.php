<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('fontend.index');
});
Route::get('sp', function () {
    return view('fontend.sanpham');
});
Route::get('ct_sp', function () {
    return view('fontend.chitiet_sp');
});
Route::get('news', function () {
    return view('fontend.news');
});
Route::get('ct_news', function () {
    return view('fontend.chitiet_news');
});
Route::get('contact', function () {
    return view('fontend.contact');
});
Route::get('td', function () {
    return view('fontend.tuyendung');
});
Route::get('login', function () {
    return view('fontend.login');
});
