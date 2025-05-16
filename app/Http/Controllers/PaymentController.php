<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
//     public function index (Request $request, $id) {

// \Midtrans\Config::$serverKey = 'SB-Mid-server-cX68a9tO4FcMQLG7cbz-Psxz';
// \Midtrans\Config::$isProduction = false;
// \Midtrans\Config::$isSanitized = true;
// \Midtrans\Config::$is3ds = true;

// $product = Product::findOrFail($id);

// $params = array(
//     'transaction_details' => array(
//         'order_id' => rand(),
//         'gross_amount' => $product->harga
//     ),
//     'customer_details' => array(
//         'first_name' => 'budi',
//         'last_name' => 'pratama',
//         'email' => 'budi.pra@example.com',
//         'phone' => '08111222333',
//     ),
// );

// $snapToken = \Midtrans\Snap::getSnapToken($params);
// // @dd($snapToken);

// return view('payment', compact('snapToken'));
    }
}
