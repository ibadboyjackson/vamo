<?php

namespace App\Http\Controllers\Search;

use App\Hotel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HotelsController extends Controller
{
    public function search(Request $request) {
        $result = Hotel::where('city', $request->get('q'))->get();
        if($result) {
            return view('recherches.hotel')->with('results', $result);
        }
    }
    public function select(){
        return view('reserve.hotel');
    }
    public function confirmed() {
        return view('confirmed.hotel');
    }
    public function detail($id){
        $hotel = Hotel::find($id);
        if($hotel){
            return view('detail.hotel')->with('hotel', $hotel);
        }else{
            return redirect()->back();
        }
    }
}
