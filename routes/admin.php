<?php
use Illuminate\Support\Facades\Routes;
use App\Http\Controllers\Admin\AdminDashboardController;

use Illuminate\Support\Facades\Route;
Route::group(['prefix'=>'admin','as'=>'admin.'],function(){
    Route::get('admin/dashboard',[AdminDashboardController::class,'index'])->name('dashboard');


});
