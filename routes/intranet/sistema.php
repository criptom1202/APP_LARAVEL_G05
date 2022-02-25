<?php

use App\Http\Controllers\CargoController;
use Illuminate\Support\Facades\Route;


Route::get('sys', function(){
    return "otro directorio";
})->middleware('throttle:limite-personal');



Route::prefix('intranet')->group(function(){

    // Route::get('cargo', [CargoController::class, 'index'])->name('cargo.index');
    // Route::get('cargo/create', [CargoController::class, 'create'])->name('cargo.create');
    // Route::get('cargo/show', [CargoController::class, 'show'])->name('cargo.show');
    // Route::get('cargo/{id}/edit', [CargoController::class, 'edit'])->name('cargo.edit');
    // Route::post('cargo/store', [CargoController::class, 'store'])->name('cargo.store');
    // Route::put('cargo/{id}/update', [CargoController::class, 'update'] )-> name('cargo.update');
    // Route::delete('cargo/{id}/destroy', [CargoController::class, 'destroy'])->name('cargo.destroy');


    Route::resource('cargo', CargoController::class)->names('cargo');


});

