<?php

use Illuminate\Support\Facades\Route;

Route::get('/', "AuthUser\MainPageShow@mainshow");
Route::get('/mess/{locale}', 'AuthUser\MainPageShow@local_lang');

Route::any("/helpmess", "AuthUser\HelpmessController@helpmess");

Route::get("/orders", "AuthUser\NewOrders@showorder");
Route::any("/orders/full", "AuthUser\NewOrders@orderFull");

Route::post("/orders/id", "AuthUser\NewOrders@showid");


Route::get("/products/info/{id}", "AuthUser\ProdinfoController@prodinfo")->name('prodinfo');

Route::get("/products/{id}", "AuthUser\ProductController@productMain");



Route::any("/register", "AuthUser\AuthRegController@register")->name("register");
Route::any("/authorization", "AuthUser\AuthLogController@authorization")->name("authorization");
Route::post("/logouts", "AuthUser\AuthLogController@logouts")->name('logouts');



Route::get("/profile", "AuthUser\ProfileController@showprof");
Route::get("profileChange", "AuthUser\ProfileController@changeProf")->name('profileChange');


Route::get("/like/{idlike}", "AuthUser\LikeController@likeshow");

Route::group(["prefix" => "/privateurl", "middleware" => ['newauth']], function () {
    Route::get("/admin", "Admin\AdminController@adminshow")->name("admin");
    Route::get("/showProd", "Admin\AddProdController@showadd")->name("showprod");
    Route::any("/addProd", "Admin\AddProdController@addProd")->name("addProd");



    //cate
    Route::get("/showCate", "Admin\AddCateController@showCate")->name("showCate");
    Route::get("/Catdel/{id}", "Admin\AddCateController@catdel");
    Route::any("/addCate", "Admin\AddCateController@addCate")->name("addCate");
    Route::any("/addroleCate", "Admin\AddCateController@addroleCate")->name("addroleCate");

    //message

    Route::get("/message", "Admin\MessController@showMessage")->name("message");
    Route::get("/orders", "Admin\OrdersController@neworders")->name("orders");
});
