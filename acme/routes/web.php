<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlueprintController;

Route::get('/', function () {
    return view('admin.dashboard');
});
Route::group(['prefix'=>'dashboard'],function(){
    Route::get("/", function(){
        return view('admin.dashboard');
    });
    Route::get("/blueprint",[BlueprintController::class,'getBlueprint']);
    Route::post("/blueprint",[BlueprintController::class,'createBlueprint']);
});
