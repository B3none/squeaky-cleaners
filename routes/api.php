<?php

use Illuminate\Http\Request;
use App\Http\Controllers\API\EnquiryController;

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

Route::post('/enquiry',  function (Request $request) {
    return (new EnquiryController())->enquiry($request);
});
