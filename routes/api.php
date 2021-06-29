<?php
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonateController;
// Route::apiResource('donate','DonateController');
Route::apiResource('donate', DonateController::class);
Route::get('/posts',function(){
    return Post::all();
});
