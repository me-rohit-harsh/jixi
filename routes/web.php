<?php

use App\Http\Controllers\DomainController;
use App\Http\Controllers\TransferController;
use App\Http\Controllers\HostingController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\CommonController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CloudController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('index');
});
Route::get('/blog', function () {
    return view('blog');
});

Route::get("/domains", [DomainController::class, 'domains'])->name('jixi.domains');
Route::get("/user/domain", [DomainController::class, 'cart'])->name('jixi.cart.domain');

Route::get("/user/domain/pricing", [TransferController::class, 'userPricing'])->name('jixi.user.pricing');
Route::get("/user/transfer", [TransferController::class, 'userTransfer'])->name('jixi.user.transfer');
Route::get("/transfer", [TransferController::class, 'transfer'])->name('jixi.transfer');
Route::get("user/submitticket", [SupportController::class, 'submitTicket'])->name('jixi.ticket');

Route::get("/user/register", [UserController::class, 'register'])->name('user.register');
Route::get("/user/login", [UserController::class, 'login'])->name('user.login');
Route::get("/user/password/reset", [UserController::class, 'resetPassword'])->name('user.reset.password');
Route::get("/user/cart", [UserController::class, 'userCart'])->name('user.cart');



Route::get("/cloud-hosting", [HostingController::class, 'hosting'])->name('jixi.hosting');
Route::get("/buy-hosting", [HostingController::class, 'purchaseHosting'])->name('buy.hosting');
Route::get("/support", [SupportController::class, 'support'])->name('jixi.support');
Route::get("/user/contact", [SupportController::class, 'userSupport'])->name('jixi.user.support');
Route::get("/refund", [CommonController::class, 'refund'])->name('jixi.refund');
Route::get("/about-us", [CommonController::class, 'about'])->name('jixi.about');
Route::get("/terms", [CommonController::class, 'terms'])->name('jixi.terms');
Route::get("/privacy", [CommonController::class, 'privacy'])->name('jixi.privacy');
Route::get("/user/knowledgebase", [CommonController::class, 'knowledgebase'])->name('jixi.knowledgebase');
Route::get("/user/announcements", [CommonController::class, 'announcements'])->name('jixi.announcements');

Route::get("user/store/cloud-hosting", [HostingController::class, 'cloudHosting'])->name('cloud.hosting');
