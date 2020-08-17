<?php

use Illuminate\Support\Facades\Route;

Route::get('/', "AuthUser\MainPageShow@mainshow");
Route::get('mess/{locale}','AuthUser\MainPageShow@local_lang');


Route::get("/productinfo/{id}","AuthUser\ProdinfoController@sentProdinfo");
  

Route::any("/register","AuthUser\AuthRegController@register")->name("register");
Route::any("/authorization","AuthUser\AuthLogController@authorization")->name("authorization");
Route::post("/logouts","AuthUser\AuthLogController@logouts")->name('logouts');



Route::get("/profile","AuthUser\ProfileController@showprof");
Route::get("profileChange","AuthUser\ProfileController@changeProf")->name('profileChange');



Route::group(["prefix"=>"/privateurl","middleware"=>['newauth']],function () {
Route::get("/admin","Admin\AdminController@adminshow")->name("admin");
Route::get("/showProd","Admin\AddProdController@showadd")->name("showprod");
Route::any("/addProd","Admin\AddProdController@addProd")->name("addProd");

//cate
Route::get("/showCate","Admin\addCateController@showCate")->name("showCate");
 Route::any("/addCate","Admin\addCateController@addCate")->name("addCate");


});




