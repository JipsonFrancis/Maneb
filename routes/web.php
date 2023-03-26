<?php

use App\Http\Controllers\BlackboxController;
use App\Http\Controllers\CenterController;
use App\Http\Controllers\CheckpointController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\ExamPaperController;
use App\Http\Controllers\PacketController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TransitController;
use App\Http\Controllers\TruckController;
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
    dd(Blackbox::first()->packs );
});

Route::resources([
    'blackboxes' => BlackboxController::class,
    'centers' => CenterController::class,
    'checkpoints' => CheckpointController::class,
    'exams' => ExamController::class,
    'exampapers' => ExamPaperController::class,
    'packets' => PacketController::class,
    'roles' => RoleController::class,
    'subjects' => SubjectController::class,
    'transits' => TransitController::class,
    'trucks' => TruckController::class
]);
