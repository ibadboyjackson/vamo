<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OffresController extends Controller
{
    public function index () {
        return view('pages.offers');
    }
}
