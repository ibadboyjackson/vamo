<?php

namespace App\Http\Controllers\Search;

use App\Car;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarController extends Controller
{
    public function find(Request $request) {
        if($request->has('q')){
            return Car::where('location', 'like', '%' . $request->get('q') . '%')->get();

        }elseif ($request->has('p')){
            return Car::where('restriction', 'like', '%' . $request->get('p') . '%')->get();
        }
    }
}
