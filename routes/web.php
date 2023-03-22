<?php

use App\Models\Blackbox;
use App\Models\Center;
use App\Models\Checkpoint;
use App\Models\Exam;
use App\Models\ExamPaper;
use App\Models\Packet;
use App\Models\Role;
use App\Models\Subject;
use App\Models\Transit;
use App\Models\Truck;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    dd(ExamPaper::first()->pack );
});
