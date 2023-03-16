<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PostController as PostController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/test',function(){
    return response()->json([
        'name' =>'New york',
        'state' => 'Usa'
    ]);
});

Route::get('/posts',[PostController::class, 'index']);
Route::get('/contacts',[]);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
