<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainPageController extends Controller
{
    public function index() {
        echo '<pre>';
        print_r(CliController::parseCountries());
        die;
        return view('index');
    }
}
