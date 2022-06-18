<?php

namespace App\Http\Controllers;

use App\Models\Country;

class CountryController extends Controller
{
    public function getRandomCountry()
    {
        return Country::getRandomCountry();
    }
}
