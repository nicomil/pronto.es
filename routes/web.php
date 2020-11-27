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
Route::post('/announcement/images/upload', [HomeController::class,'uploadImages'])->name('announcement.images.upload');
Route::delete('/announcement/images/remove', [HomeController::class,'removeImages'])->name('announcement.images.remove');
Route::get('/announcement/images', [HomeController::class,'getImages'])->name('announcement.images');

Route::get('/category/{name}/{id}/announcements',[PublicController::class,'announcementsByCategory'])->name('category.announcements');

Route::get('/revisor',[RevisorController::class,'index'] )->name('revisor.home');
Route::post('/revisor/announcement/{id}/accept',[RevisorController::class,'accept'])->name('revisor.announcement.accept');
Route::post('/revisor/announcement/{id}/reject',[RevisorController::class,'reject'])->name('revisor.announcement.reject');

Route::post('/locale/{locale}',[PublicController::class,'locale'])->name('locale');