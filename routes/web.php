<?php

use App\Http\Controllers\CommentControllerController;
use App\Http\Controllers\cookieController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\liveController;
use App\Http\Controllers\livevideoController;
use App\Http\Controllers\ProgrammeController;
use App\Http\Controllers\testController;
use App\Http\Controllers\VideoController;
use App\Models\CommentController;
use App\Models\Inscription;
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




route::resource("/home",InscriptionController::class);
route::resource("/live",livevideoController::class);
route::resource("/vedio",VideoController::class);


route::resource("/comment",CommentControllerController::class);

route::get("/",[InscriptionController::class,"index"]);
//route::post("/home",[InscriptionController::class,"store"]);

route::get("/poster",function(){
    return view("lespdfpage");
})->name("poster");



Route::get("/programme",[ProgrammeController::class,"showprogramme"])->name("showprogramme");


