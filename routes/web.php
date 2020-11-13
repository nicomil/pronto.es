<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;

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

Route::get('/', [PublicController::class,'index'])->name('home');
Route::get('/announcement/new', [HomeController::class,'newAnnouncement'])->name('announcement.new');
Route::post('/announcement/create', [HomeController::class,'createAnnouncement'])->name('announcement.create');

Route::get('/category/{name}/{id}/announcements',[PublicController::class,'announcementsByCategory'])->name('category.announcements');

Route::get('/revisor',[RevisorController::class,'index'] );