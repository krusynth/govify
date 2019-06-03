<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;

class HomeController extends Controller {
    function index() {
        return view('home.index');
    }
}
