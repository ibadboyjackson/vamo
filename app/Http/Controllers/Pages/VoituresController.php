<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VoituresController extends Controller
{
    public function index() {
        return view('pages.voitures');
    }
}
