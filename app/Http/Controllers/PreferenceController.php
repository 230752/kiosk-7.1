<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Routing\Controller;

class PreferenceController extends Controller
{
    public function setPreference(Request $request)
    {
        $preference = $request->input('preference');
        if (in_array($preference, ['eat_in', 'take_away'])) {
            Cookie::queue('meal_preference', $preference, 5); // Set the cookie for 5 minutes
            return response()->json(['status' => 'success']);
        }

        return response()->json(['status' => 'error'], 400);
    }

    public function deletePreference(Request $request)
    {
        Cookie::queue(Cookie::forget('meal_preference'));
        Cookie::queue(Cookie::forget('cart'));
        Cookie::queue(Cookie::forget('totalQuantity'));
        Cookie::queue(Cookie::forget('totalPrice'));
        return response()->json(['status' => 'success']);
    }
}
