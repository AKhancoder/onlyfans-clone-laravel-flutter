<?php

use App\Http\Controllers\Api\CreatorApiController;
use App\Http\Controllers\Api\PostApiController;
use App\Http\Controllers\Api\MessageApiController;
use App\Http\Controllers\Api\NotificationApiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes — for future mobile app (React Native / Flutter)
|--------------------------------------------------------------------------
*/

Route::prefix('v1')->group(function () {

    // Public endpoints
    Route::get('/creators', [CreatorApiController::class, 'index']);
    Route::get('/creators/{username}', [CreatorApiController::class, 'show']);
    Route::get('/categories', [CreatorApiController::class, 'categories']);

    // Authenticated endpoints
    Route::middleware('auth:sanctum')->group(function () {
        Route::get('/user', fn() => request()->user());
        Route::get('/feed', [PostApiController::class, 'feed']);
        Route::apiResource('/posts', PostApiController::class);
        Route::post('/posts/{post}/like', [PostApiController::class, 'like']);
        Route::get('/messages', [MessageApiController::class, 'index']);
        Route::post('/messages/{user}', [MessageApiController::class, 'send']);
        Route::get('/notifications', [NotificationApiController::class, 'index']);
        Route::post('/notifications/read-all', [NotificationApiController::class, 'markAllRead']);
    });
});
