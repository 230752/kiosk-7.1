<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Http;
class ShopController extends Controller
{
    public function main()
    {
        // Fetch products from the external API
        $response = Http::get('http://u230752.gluwebsite.nl/kiosk-api');
        $products = $response->json();

        // Pass the products to the Blade template
        return view('main', compact('products'));
    }

    public function shop()
    {
        // Fetch products from the external API
        $response = Http::get('http://u230752.gluwebsite.nl/kiosk-api');
        $products = $response->json();

        // Pass the products to the Blade template
        return view('shop', compact('products'));
    }

    public function add()
    {
        // Fetch products from the external API
        $response = Http::get('http://u230752.gluwebsite.nl/kiosk-api');
        $products = $response->json();

        // Pass the products to the Blade template
        return view('add', compact('products'));
    }
}