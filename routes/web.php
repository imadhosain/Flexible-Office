<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EXController;
use App\Http\Controllers\AccController;
use App\Http\Controllers\AddController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\IbramController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MinistryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// user
Route::get('/', [UserController::class,"showcorrectpage"])->name('login');
Route::post('/register' ,[UserController::class,"register"]);
Route::post('/login' ,[UserController::class,"login"]);
Route::post('/logout' ,[UserController::class,"logout"]);

// admin
Route::get('/admin/adminrooms' ,[AdminController::class,"A_rooms"])->middleware('can:AdminPages');
Route::get('/admin/adminoffices' ,[AdminController::class,"A_offices"])->middleware('can:AdminPages');
Route::get('/admin/admincustomers' ,[AdminController::class,"A_customers"])->middleware('can:AdminPages');
Route::get('/admin/admincontracts' ,[AdminController::class,"A_contracts"])->middleware('can:AdminPages');
Route::get('/admin/management' ,[AdminController::class,"management"])->middleware('can:AdminPages');

//ministry
Route::get('/ministry/ministryrooms' ,[MinistryController::class,"M_rooms"]);
Route::get('/ministry/ministryoffices' ,[MinistryController::class,"M_offices"]);
Route::get('/ministry/ministrycustomers' ,[MinistryController::class,"M_customers"]);
Route::get('/ministry/ministrycontracts' ,[MinistryController::class,"M_contracts"]);

//accountant - teller
Route::get('/accountant/accaddcustp' ,[AccController::class,"accaddcustpage"])->middleware('can:AccPages');
Route::get('/accountant/accaddcontp' ,[AccController::class,"accaddcontpage"])->middleware('can:AccPages');
Route::post('/accaddcust' ,[AccController::class,"accaddcust"])->middleware('can:AccPages');
Route::post('/accaddcont',[AccController::class,"accaddcont"])->middleware('can:AccPages');

// add customer
Route::get('/admin/addcustomerpage' ,[AddController::class,"addcustomerpage"])->middleware('can:AdminPages');
Route::post('/addcustomer' ,[AddController::class,"addcustomer"])->middleware('can:AdminPages');
Route::delete('/deletecustomer/{id}' ,[AddController::class,"deletecustomer"])->middleware('can:AdminPages');
Route::get('/updatecustomerpage/{id}',[AddController::class,"updatecustomerpage"])->middleware('can:AdminPages');
Route::put('/updatecustomer/{id}',[AddController::class,"updatecustomer"])->middleware('can:AdminPages');


// add office
Route::get('/admin/addofficepage' ,[AddController::class,"addofficepage"])->middleware('can:AdminPages');
Route::post('/addoffice' ,[AddController::class,"addoffice"])->middleware('can:AdminPages');
Route::delete('/deleteoffice/{id}' ,[AddController::class,"deleteoffice"])->middleware('can:AdminPages');
Route::get('/updateofficepage/{id}',[AddController::class,"updateofficepage"])->middleware('can:AdminPages');
Route::put('/updateoffice/{id}',[AddController::class,"updateoffice"])->middleware('can:AdminPages');



// add room
Route::get('/admin/addroompage' ,[AddController::class,"addroompage"])->middleware('can:AdminPages');
Route::post('/addroom' ,[AddController::class,"addroom"])->middleware('can:AdminPages');
Route::delete('/deleteroom/{id}' ,[AddController::class,"deleteroom"])->middleware('can:AdminPages');
Route::get('/updateroompage/{id}',[AddController::class,"updateroompage"])->middleware('can:AdminPages');
Route::put('/updateroom/{id}',[AddController::class,"updateroom"])->middleware('can:AdminPages');



// add contract
Route::get('/admin/addcontractpage' ,[AddController::class,"addcontractpage"])->middleware('can:AdminPages');
Route::post('/addcontract',[AddController::class,"addcontract"])->middleware('can:AdminPages');
Route::delete('/deletecontract/{id}' ,[AddController::class,"deletecontract"])->middleware('can:AdminPages');
Route::get('/updatecontractpage/{id}',[AddController::class,"updatecontractpage"])->middleware('can:AdminPages');
Route::put('/updatecontract/{id}',[AddController::class,"updatecontract"])->middleware('can:AdminPages');

// Excel
Route::controller(ExController::class)->group(function(){
    Route::get('contracts', 'index');
    Route::get('contract-export', 'export')->name('contract.export');
    Route::post('contract-import', 'import')->name('contract.import');
});


