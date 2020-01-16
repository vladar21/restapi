<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/v1/cars', function (Request $request) {
//     return response()->json([
//         'cars' => [
//             'registration' => 'ABC001',
//             'dateRegistered' => '2019-01-01',
//             'color' => 'black',
//             'make' => 'tesla',
//             'model' => 's'
//         ]
//     ], 200);
// });

Route::middleware('auth:api')->get('/v1/cars', function (Request $request) {
    return response()->json([
        'cars' => [
            'registration' => 'ABC001',
            'dateRegistered' => '2019-01-01',
            'color' => 'black',
            'make' => 'tesla',
            'model' => 's'
        ]
    ], 200);
});