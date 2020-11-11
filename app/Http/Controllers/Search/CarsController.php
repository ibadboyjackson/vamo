<?php

namespace App\Http\Controllers\Search;

use App\Car;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarsController extends Controller
{
    public function search(Request $request) {
        $results = Car::where('restriction', $request->get('p'))->where('location', $request->get('q'))->get();
        if($results){
            return view('recherches.car')->with('results', $results);
        }else{
            return "Aucun resultat";
        }
    }

    public function select(){
        return view('reserve.car');
    }
    public function confirmed(){
        return view('confirmed.car');
    }
    public function detail($id) {
        $car = Car::find($id);
        if($car){
            return view('detail.car')->with('car', $car);
        }
        return 'Not found';
    }
}
