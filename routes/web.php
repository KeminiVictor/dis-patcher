<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DeliveryPointController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Route::get("/", [PagesController::class, "index"])->name("home");
Route::get("/about", [PagesController::class, "about"])->name("about");
Route::get("/tracking", [PagesController::class, "tracking"])->name("tracking");
Route::get("/tracking/{tracking_number}", [OrderController::class, "track"])->name("track-order");
Route::get("/get-a-quote", [PagesController::class, "getQuote"])->name("get-a-quote");
Route::get("/contact", [PagesController::class, "contact"])->name("contact");
Route::get("/pricing", [PagesController::class, "pricing"])->name("pricing");

Auth::routes();

Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get("/", function () {
        return redirect(route("admin.dashboard"));
    });

    Route::get('dashboard', [AdminController::class, "dashboard"])->name('dashboard');
    Route::get('orders', [AdminController::class, "orders"])->name('orders');
    Route::get('add-order', [AdminController::class, "createOrder"])->name('create-order');
    Route::get('edit-order/{order}', [AdminController::class, "editOrder"])->name('edit-order');
    Route::get('order/{order}/set-path', [AdminController::class, "orderPath"])->name('order-path');
    Route::get('logout', [AdminController::class, "logout"])->name('logout');

    Route::post('add-order', [OrderController::class, "create"])->name("create-new-order");
    Route::post('edit-order', [OrderController::class, "edit"])->name("edit-prev-order");
    Route::get('delete-order/{order}', [OrderController::class, "delete"])->name("delete-order");
    Route::post('edit-delivery-point/', [DeliveryPointController::class, "edit"])->name("edit-delivery-point");
    Route::post('new-delivery-point', [DeliveryPointController::class, "create"])->name("new-delivery-point");
    Route::get('delete-delivery-point/{point_id}', [DeliveryPointController::class, "delete"])->name("delete-delivery-point");
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
