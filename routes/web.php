<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;

Route::get('/', 
[TodoListController::class, 'index']
/*
function () {
    return view('welcome');

}
*/
);

Route::post('/saveItemRoute', 
[TodoListController::class, 'saveItem']
)->name('saveItem');

Route::post('/deleteItemRoute', 
[TodoListController::class, 'deleteItem']
)->name('deleteItem');

Route::post('/markItemCompleteRoute', 
[TodoListController::class, 'markItemComplete']
)->name('markItemComplete');
