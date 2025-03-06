<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Cookie;

class CartController extends Controller {
    public function addProduct(Request $request, $product_id) {
        $quantity = 1;

        $cart = json_decode(Cookie::get('cart', '[]'), true);

        $productExists = false;

        foreach($cart as &$item) {
            if ($item['product_id'] == $product_id) {
                $item['quantity'] += $quantity;
                $productExists = true;
                break;
            }
        }

        if(!$productExists) {
            $cart[] = [
                'product_id' => $product_id,
                'quantity' => $quantity,
            ];
        }

        Cookie::queue('cart', json_encode($cart), 5);

        return response()->json(['cart' => $cart]);
    }
}