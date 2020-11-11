<?php

namespace App\Http\Controllers\Search;

use App\Flight;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Date;

class FlightController extends Controller
{
    /**
     * Permet de recuperer la liste des vols si elle existe
     * @param Request $request
     * @return string
     */
    public function search(Request $request){
        $from = $request->get('q');
        $to = $request->get('p');
        $date_depart = $request->get('date_depart');
        $date_back = $request->get('date_back');
        $adult_number = $request->get('adult_number');
        $child_number = $request->get('child_number');
        $result = Flight::orderBy('price', 'DESC')->where('from', $from)->where('to', $to)->get();
        if($result){
            return view('recherches.flight', [
                'results' => $result
            ]);
        }else{
            return 'nothing found';
        }
    }

    public function select() {
        return view('reserve.flight');
    }

    public function confirmed() {
        return view('confirmed.flight');
    }
    public function detail(){
        return view('detail.flight');
    }
}
