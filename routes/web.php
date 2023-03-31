<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\InvoiceController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/web/facturacion/facturas-impagadas.php', [InvoiceController::class, 'index']);

Route::get('/cron/facturacion/facturas-impagadas.php',
    /*Datos de configuración del cron para el primer día de cada mes  0 0 1 * *   */
);
