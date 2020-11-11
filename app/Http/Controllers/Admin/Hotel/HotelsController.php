<?php

namespace App\Http\Controllers\Admin\Hotel;

use App\Flight;
use App\Hotel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

class HotelsController extends Controller
{
    public function __construct()
    {
        $this->middleware('isAdmin');
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotels = Hotel::orderBy('created_at', 'DESC')->paginate(20);
        return view('dashboard.admin.pages.hotels.index')->with('hotels', $hotels);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.admin.pages.hotels.actions.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'city' => 'required',
            'file' => 'required|image',
            'price' => 'required',
            'district' => 'required',
            'country' => 'required',
            'description' => 'required',
        ]);

        $hotel = new Hotel();

        if($request->hasFile('file')){
            $image = $request->file('file');
            $filename = time(). '.' . $image->getClientOriginalExtension();
            $location = public_path('uploads/' .$filename);
            Image::make($image)->fit(370, 369)->save($location);
            $hotel->file = $filename;
        }

        $hotel->name = $request->get('name');
        $hotel->city = $request->get('city');
        $hotel->country = $request->get('country');
        $hotel->description = $request->get('description');
        $hotel->price = $request->get('price');
        $hotel->district = $request->get('district');
        $hotel->save();

        Session::flash('success', 'Hotel ajouté avec succès');
        return redirect()->route('admin.hotel.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hotel = Hotel::findOrFail($id);
        return view('dashboard.admin.pages.hotels.actions.edit')->with('hotel', $hotel);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'city' => 'required',
            'file' => 'required|image',
            'price' => 'required',
            'district' => 'required',
            'country' => 'required',
            'description' => 'required',
        ]);

        $hotel = Hotel::find($id);

        if($request->hasFile('file')){
            $image = $request->file('file');
            $filename = time(). '.' . $image->getClientOriginalExtension();
            $location = public_path('uploads/' .$filename);
            Image::make($image)->fit(270, 160)->save($location);
            $hotel->file = $filename;
        }

        $hotel->name = $request->get('name');
        $hotel->city = $request->get('city');
        $hotel->country = $request->get('country');
        $hotel->description = $request->get('description');
        $hotel->price = $request->get('price');
        $hotel->district = $request->get('district');
        $hotel->save();

        Session::flash('success', 'Hotel modifié avec succès');
        return redirect()->route('admin.hotel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hotel = Flight::find($id);
        $hotel->delete();
        Session::flash('success', 'Hotel supprimé avec succès');
        return redirect()->route('admin.hotel.index');
    }
}
