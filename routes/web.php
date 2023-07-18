<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\KategoriController;
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

Route::controller(AuthController::class)->group(function () {
    Route::get("register", "register")->name("register");
    Route::post("register", "registerSimpan")->name("register.simpan");

    Route::get("login", "login")->name("login");
    Route::post("login", "loginAksi")->name("login.aksi");

    Route::get("logout", "logout")
        ->middleware("auth")
        ->name("logout");
});

Route::get("/", function () {
    return redirect("/menu");
});

Route::middleware("auth")->group(function () {
    Route::get("dashboard", function () {
        return view("dashboard");
    })->name("dashboard");

    Route::controller(MenuController::class)
        ->prefix("menu")
        ->group(function () {
            Route::get("", "index")->name("menu");
            Route::get("tambah", "tambah")->name("menu.tambah");
            Route::post("tambah", "simpan")->name("menu.tambah.simpan");
            Route::get("edit/{id}", "edit")->name("menu.edit");
            Route::post("edit/{id}", "update")->name("menu.tambah.update");
            Route::get("hapus/{id}", "hapus")->name("menu.hapus");
        });
    // Di file routes/web.php
    Route::get("menu/views/{id}", [MenuController::class, "views"])->name(
        "menu.views"
    );
    // Di file routes/web.php
    Route::get("menu/category/{id}", [MenuController::class, "category"])->name(
        "menu.category"
    );

    Route::controller(KategoriController::class)
        ->prefix("kategori")
        ->group(function () {
            Route::get("", "index")->name("kategori");
            Route::get("tambah", "tambah")->name("kategori.tambah");
            Route::post("tambah", "simpan")->name("kategori.tambah.simpan");
            Route::get("edit/{id}", "edit")->name("kategori.edit");
            Route::post("edit/{id}", "update")->name("kategori.tambah.update");
            Route::get("hapus/{id}", "hapus")->name("kategori.hapus");
        });
});
