<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('landingPage');
});

// Route::get('/merchandise', function () {
//     return view('merchandise', [
//         'barang' => [
//             [
//                 'gambar' => 'images/3-o.jpg',
//             ],
//             [
//                 'gambar' => 'images/16.png',
//             ],
//             [
//                 'gambar' => 'images/20.png',
//             ],
//             [
//                 'gambar' => 'images/38-o.jpg',
//             ],
//             [
//                 'gambar' => 'images/46-o.jpg',
//             ],
//             [
//                 'gambar' => 'images/cat.jpg',
//             ],
//             [
//                 'gambar' => 'images/Sup-cuh.jpg',
//             ]
//         ]
//     ]);
// });

Route::resource('/ticket', App\Http\Controllers\TicketController::class);

Route::resource('/merchandise', App\Http\Controllers\MerchandiseController::class);
