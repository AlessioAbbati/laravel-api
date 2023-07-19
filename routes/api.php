<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProjectController;



// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('projects', [ProjectController::class, 'index'])->name('api.projects.index');
Route::get('projects/{project}', [ProjectController::class, 'show'])->name('api.projects.show');

Route::post('leads/', [LeadController::class, 'store'])->name('api.leads.store');