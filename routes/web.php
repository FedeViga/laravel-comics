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

    $links = ['Characters', 'Comics', 'Movies', 'TV', 'Games', 'Collectibles', 'Videos', 'Fans', 'news', 'Shop'];
    
    $comics = config("db.comics");

    $icons = config("db.icons");

    $footerLinks = config("db.footerLinks");

    $imgList = ['footer-facebook.png', 'footer-twitter.png', 'footer-youtube.png', 'footer-pinterest.png', 'footer-periscope.png',];
    
    return view('home', compact('links', 'comics', 'icons', 'footerLinks', 'imgList'));
    
})->name('home');
