<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\signupController;
use App\Http\Controllers\loginController;

use App\Http\Controllers\KanbanController;

Route::get('/', function () {
    return view('welcome');
});


//login page routes
Route::view('login','login');
Route::post('login',[loginController::class,'login']);
Route::post('signup',[signupController::class,'signup']);

Route::view('mainui','mainui');
Route::post('addStage',[KanbanController::class,'addStage']);
Route::delete('stages/{id}', [KanbanController::class, 'deleteStage'])->name('deleteStage');
Route::get('/mainui', [KanbanController::class, 'stageSettings'])->name('stageSettings');
Route::post('/projects/add', [KanbanController::class, 'addProject'])->name('addProject');
Route::get('/kanban', [KanbanController::class, 'kanbanBoard'])->name('kanbanBoard');

