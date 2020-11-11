<?php

namespace App\Http\Controllers\Search;

use App\Cruise;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CruisesController extends Controller
{
    public function search(Request $request) {
        $results = Cruise::where('from', $request->get('q'))->where('to', $request->get('p'))->get();
        if($results){
            return view('recherches.cruise')->with('results', $results);
        }else{
            return 'nothing';
        }
    }
    public function detail($id){
        $cruise = Cruise::find($id);
        return view('detail.cruise')->with('cruise', $cruise);
    }
    public function select() {
        return view('reserve.cruise');
    }
    public function confirmed(){
        return view('confirmed.cruise');
    }
}
