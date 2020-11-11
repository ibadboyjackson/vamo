<?php

namespace App\Http\Controllers\Search;

use App\Flight;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function find(Request $request) {
        if($request->has('q')){
            return Flight::where('from', 'like', '%' . $request->get('q') . '%')->get();

        }elseif ($request->has('p')){
            return Flight::where('to', 'like', '%' . $request->get('p') . '%')->get();
        }
    }
}
