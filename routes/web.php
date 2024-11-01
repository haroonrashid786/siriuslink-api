<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Intervention\Image\Facades\Image;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();


Route::group(
    ['middleware' => 'auth'],
    function () {

        Route::get('vehicle-types', [HomeController::class, 'vehicleTypes'])->name('vehicle_types');
        Route::get('vehicle-type/add', [HomeController::class, 'addVehicleType'])->name('add.vehicle_type');
        Route::post('vehicle-type/insert', [HomeController::class, 'insertVehicleType'])->name('insert.vehicle_type');
        Route::get('vehicle-type/edit/{id}', [HomeController::class, 'editVehicleType'])->name('edit.vehicle_type');
        Route::post('vehicle-type/update/{id}', [HomeController::class, 'updateVehicleType'])->name('update.vehicle_type');
        Route::get('vehicle_type/delete/{id}', [HomeController::class, 'deleteVehicleType'])->name('delete.vehicle_type');
        // Route::get('vehicle_type/delete/{id}'. [HomeController::class, 'deleteVehicleType'])->name('delete.vehicle_type');


        Route::get('services', [HomeController::class, 'services'])->name('services');
        Route::get('service/add', [HomeController::class, 'addService'])->name('add.service');
        Route::post('service/insert', [HomeController::class, 'insertService'])->name('insert.service');
        Route::get('service/edit/{id}', [HomeController::class, 'editService'])->name('edit.service');
        Route::post('service/update/{id}', [HomeController::class, 'updateService'])->name('update.service');
        Route::get('service/delete/{id}', [HomeController::class, 'deleteService'])->name('delete.service');


        Route::get('features', [HomeController::class, 'features'])->name('features');
        Route::get('feature/add', [HomeController::class, 'addFeature'])->name('add.feature');
        Route::post('feature/insert', [HomeController::class, 'insertFeature'])->name('insert.feature');
        Route::get('feature/edit/{id}', [HomeController::class, 'editFeature'])->name('edit.feature');
        Route::post('feature/update/{id}', [HomeController::class, 'updateFeature'])->name('update.feature');
        Route::get('feature/delete/{id}', [HomeController::class, 'deleteFeature'])->name('delete.feature');


        Route::get('convensions', [HomeController::class, 'convensions'])->name('convensions');
        Route::get('convension/add', [HomeController::class, 'addConvension'])->name('add.convension');
        Route::post('convension/insert', [HomeController::class, 'insertConvension'])->name('insert.convension');
        Route::get('convension/edit/{id}', [HomeController::class, 'editConvension'])->name('edit.convension');
        Route::post('convension/update/{id}', [HomeController::class, 'updateConvension'])->name('update.convension');
        Route::get('convension/delete/{id}', [HomeController::class, 'deleteConvension'])->name('delete.convension');


        Route::get('carriers', [HomeController::class, 'carriers'])->name('carriers');
        Route::get('carriers/edit/{id}', [HomeController::class, 'editCarrier'])->name('edit.carrier');
        Route::post('carriers/update/wallet/{id}', [HomeController::class, 'updateCarrierWallet'])->name('update.wallet');
        Route::get('update/approval/{id}', [HomeController::class, 'updateApproval']);
        Route::get('carrier/orders/{id}', [HomeController::class, 'carrierOrders'])->name('carrier.orders');

        Route::get('shippers', [HomeController::class, 'shippers'])->name('shippers');
        Route::get('shippers/orders/{id}', [HomeController::class, 'shipperOrders'])->name('shipper.orders');
        // Route::get('convension/add', [HomeController::class, 'addConvension'])->name('add.convension');
        // Route::post('convension/insert', [HomeController::class, 'insertConvension'])->name('insert.convension');
        // Route::get('convension/edit/{id}', [HomeController::class, 'editConvension'])->name('edit.convension');
        // Route::post('convension/update/{id}', [HomeController::class, 'updateConvension'])->name('update.convension');
        // Route::get('convension/delete/{id}', [HomeController::class, 'deleteConvension'])->name('delete.convension');

        Route::get('tickets', [HomeController::class, 'tickets'])->name('tickets');

        Route::get('orders', [HomeController::class, 'allOrders'])->name('orders');
        Route::get('settings', [HomeController::class, 'settings'])->name('settings');
        Route::post('settings/post', [HomeController::class, 'settingsPost'])->name('settings.post');
    }
);
