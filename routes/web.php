<?php

use App\Http\Controllers\DomainController;
use App\Http\Controllers\TransferController;
use App\Http\Controllers\HostingController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\CommonController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CloudController;

Route::get('/', function () {
    return view('index');
});
Route::get('/blog', function () {
    return view('blog');
});

Route::get("/domains", [DomainController::class, 'domains'])->name('jixi.domains');
Route::get("/transfer", [TransferController::class, 'transfer'])->name('jixi.transfer');
Route::get("/cloud-hosting", [HostingController::class, 'hosting'])->name('jixi.hosting');
Route::get("/buy-hosting", [HostingController::class, 'purchaseHosting'])->name('buy.hosting');
Route::get("/support", [SupportController::class, 'support'])->name('jixi.support');
Route::get("/refund", [CommonController::class, 'refund'])->name('jixi.refund');
Route::get("/about-us", [CommonController::class, 'about'])->name('jixi.about');
Route::get("/terms", [CommonController::class, 'terms'])->name('jixi.terms');
Route::get("/privacy", [CommonController::class, 'privacy'])->name('jixi.privacy');
