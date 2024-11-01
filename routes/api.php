<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProjectController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('user/checkemail', [UserController::class, 'checkEmail']);
Route::post('user/checknumber', [UserController::class, 'checkNumber']);

Route::post('user/register', [UserController::class, 'registerUser']);

/* USER SOCIAL LOGIN ROUTES */
Route::post('loginwithfacebook', [UserController::class, 'loginWithFacebook']);
Route::post('loginwithgoogle', [UserController::class, 'loginWithGoogle']);
Route::post('loginwithapplepay', [UserController::class, 'loginWithApplePay']);

Route::post('validateEmailForForgotPassword', [UserController::class, 'validateEmailForForgotPassword']);



Route::get('validateEmailCode', [UserController::class, 'validateEmailCode']);
Route::middleware('auth:sanctum')->group(
    function () {

        Route::post('user/createaccount', [UserController::class, 'createAccount']);
        Route::post('user/login', [UserController::class, 'loginUser']);

        Route::post('changePassword', [UserController::class, 'changePassword']);


        /* ANNOUNCE PROJECT ENDPOINTS */
        Route::post('announeproject', [ProjectController::class, 'announceProject']);
    }
);



Route::get('/', function () {
    return view('welcome');
});
