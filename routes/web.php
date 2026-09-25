<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
 
Route::get('/', function () {
return redirect('/tasks');
});
 
Route::resource('tasks', TaskController::class);
 
require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';
