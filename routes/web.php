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
use GuzzleHttp\Psr7\Request;
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
    return view('QR_Code.index');
});

// Add middleware to the routes for security
Route::get('boxes',[BlackboxController::class, 'index']);
Route::get('centers',[CenterController::class, 'index']);
Route::get('checkpoints',[CheckpointController::class, 'index']);
Route::get('exams',[ExamController::class, 'index']);
Route::get('exampapers',[ExamPaperController::class, 'index']);
Route::get('packets',[PacketController::class, 'index']);
Route::get('roles',[RoleController::class, 'index']);
Route::get('subjects',[SubjectController::class, 'index']);
Route::get('transits',[TransitController::class, 'index']);
Route::get('trucks',[TruckController::class, 'index']);

//QR Generator
Route::get('QR/box', [BlackboxController::class, 'qrGenerator']);

// CRUD 
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
