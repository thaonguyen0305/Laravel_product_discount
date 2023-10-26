<?php

use Illuminate\Http\Request;
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

Route::get('/product-discount', function () {
    return view('product-discount');
});

Route::post('/product-discount', function (Request $req) {

    $price = $req->get('price');
    $discount = $req->get('discount');

    $discount_amount = $price * $discount * 0.1;
    $discount_price = $price - $discount_amount;
    echo "Lượng chiết khấu là: " . $discount_amount . "<br>"; 
    echo "Giá sau khi được chiết khấu là: " . $discount_price . "<br>";
});
