<?php

use App\Http\Controllers\FallbackController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::prefix("/blog")->group(function () {
    // GET
    Route::get('/create', [PostsController::class,'create'])->name('blog.create');
    Route::get('/', [PostsController::class,'index'])->name('blog.index');
    Route::get('/{id}', [PostsController::class,'show'])->name('blog.show');

    // POST
    Route::post('/', [PostsController::class,'store'])->name('blog.store');

    // PUT / PATCH
    Route::get('/edit/{id}', [PostsController::class,'edit'])->name('blog.edit');
    Route::patch('/{id}', [PostsController::class,'update'])->name('blog.update');

    // DELETE
    Route::delete('/{id}', [PostsController::class,'destroy'])->name('blog.destroy');

});



// Multiple HTTP verbs
// Route::match(['GET', 'POST'], 'blog', [PostsController::class,'index']);
// Route for invoke method
Route::get('/', HomeController::class); 

// Route::resource('blog', PostsController::class);

// fallback route
Route::fallback(FallbackController::class);
