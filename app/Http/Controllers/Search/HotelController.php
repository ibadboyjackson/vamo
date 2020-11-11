<?php

namespace App\Http\Controllers\Search;

use App\Hotel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HotelController extends Controller
{
    public function find(Request $request) {
        return Hotel::where('city', 'like', '%' . $request->get('q') . '%')->get();
    }
}
