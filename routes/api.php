<?php

use Illuminate\Http\Request;
use App\User;
use App\Http\Resources\UserResource;
use App\Http\Resources\TopicResource;
use App\Topic;
use App\Http\Resources\TopicCollection;
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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::get('/users/{user}', function( User $user) {
    return new UserResource($user);
});

Route::get('/topics/{user}', function( Topic $topic) {
    return new TopicCollection(Topic::get());
});

Route::get('/login', function( User $user) {
    $token = 'abc';
    return (new UserResource(User::find(1)))->additional([
        'meta' => [
            'token' => $token
        ]
    ]);
});
