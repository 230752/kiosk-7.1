<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Http;

class CartController extends Controller
{
    public function addProduct(Request $request, $product_id)
    {
        $quantity = 1;

        $response = Http::get('https://u230752.gluwebsite.nl/kiosk-api/');
        $products = $response->json()['products'];

        $product = collect($products)->firstWhere('product_id', $product_id);

        $price = $product['price'];

        $cart = json_decode(Cookie::get('cart', '[]'), true);

        $productExists = false;

        foreach ($cart as &$item) {
            if ($item['product_id'] == $product_id) {
                $item['quantity'] += $quantity;
                $item['price'] = $price;
                $productExists = true;
                break;
            }
        }

        if (!$productExists) {
            $cart[] = [
                'product_id' => $product_id,
                'quantity' => $quantity,
                'price' => $price,
            ];
        }

        Cookie::queue('cart', json_encode($cart), 5);

        $totalQuantity = array_sum(array_column($cart, 'quantity'));

        $totalPrice = array_sum(array_map(function ($item) {
            return $item['quantity'] * $item['price'];
        }, $cart));

        Cookie::queue('totalQuantity', $totalQuantity, 5);
        Cookie::queue('totalPrice', $totalPrice, 5);

        return redirect()->route('main');
    }
}