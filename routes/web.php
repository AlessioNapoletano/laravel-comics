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
    $navlist = config('headerNav.navList');
    $comicsList = config('comics.comicsList');
    $navElement = config('main-nav.navElement');
    $footerNavElement = config('footer-nav.footerNavElement');
    return view('home', ['comicsList' => $comicsList , 'navlist' => $navlist , 'navElement' => $navElement, 'footerNavElement' => $footerNavElement]);
});

