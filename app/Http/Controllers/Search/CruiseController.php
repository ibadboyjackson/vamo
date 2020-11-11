<?php

namespace App\Http\Controllers\Search;

use App\Cruise;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CruiseController extends Controller
{
    public function find(Request $request) {
        if($request->has('q')){
            return Cruise::where('from', 'like', '%' . $request->get('q') . '%')->get();

        }elseif ($request->has('p')){
            return Cruise::where('to', 'like', '%' . $request->get('p') . '%')->get();
        }
    }
}
