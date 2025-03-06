<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Cookie;

class PreferenceController extends Controller
{
    public function setPreference(Request $request, $preference)
    {
        if (in_array($preference, ['eat_in', 'take_away'])) {
            Cookie::queue('meal_preference', $preference, 5);
        }

        return redirect()->route('main');
    }
}