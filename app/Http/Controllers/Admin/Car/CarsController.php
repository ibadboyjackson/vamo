<?php

namespace App\Http\Controllers\Admin\car;

use App\Car;
use App\Flight;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

class CarsController extends Controller
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
        $cars = Car::orderBy('created_at', 'DESC')->paginate(20);
        return view('dashboard.admin.pages.cars.index')->with('cars', $cars);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.admin.pages.cars.actions.add');
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
            'type' => 'required',
            'image' => 'required|image',
            'file' => 'required',
            'location' => 'required',
            'kilometer' => 'required',
            'price' => 'required',
            'charge' => 'required',
            'restriction' => 'required',
            'assurance' => 'required',
        ]);

        $car = new car();

        if($request->hasFile('file')){
            $image = $request->file('file');
            $filename = time(). '.' . $image->getClientOriginalExtension();
            $location = public_path('uploads/' .$filename);
            Image::make($image)->fit(370, 270)->save($location);
            $car->file = $filename;
        }
        if($request->hasFile('image')){
            $images = $request->file('image');
            $filenames = time(). '.' . $images->getClientOriginalExtension();
            $location = public_path('uploads/' .$filenames);
            Image::make($images)->fit(300, 130)->save($location);
            $car->image = $filenames;
        }

        $car->name = $request->get('name');
        $car->location = $request->get('location');
        $car->type = $request->get('type');
        $car->price = $request->get('price');
        $car->charge = $request->get('charge');
        $car->restriction = $request->get('restriction');
        $car->kilometer = $request->get('kilometer');
        $car->assurance = $request->get('assurance');
        $car->save();

        Session::flash('success', 'Voiture ajouté avec succès');
        return redirect()->route('admin.car.index');
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
        $car = car::findOrFail($id);
        return view('dashboard.admin.pages.cars.actions.edit')->with('car', $car);
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
            'type' => 'required',
            'image' => 'required|image',
            'file' => 'required',
            'location' => 'required',
            'kilometer' => 'required',
            'price' => 'required',
            'charge' => 'required',
            'restriction' => 'required',
            'assurance' => 'required',
        ]);

        $car = Car::find($id);

        if($request->hasFile('file')){
            $image = $request->file('file');
            $filename = time(). '.' . $image->getClientOriginalExtension();
            $location = public_path('uploads/' .$filename);
            Image::make($image)->fit(370, 270)->save($location);
            $car->file = $filename;
        }
        if($request->hasFile('image')){
            $images = $request->file('image');
            $filenames = time(). '.' . $images->getClientOriginalExtension();
            $location = public_path('uploads/' .$filenames);
            Image::make($images)->fit(300, 130)->save($location);
            $car->image = $filenames;
        }

        $car->name = $request->get('name');
        $car->location = $request->get('location');
        $car->type = $request->get('type');
        $car->price = $request->get('price');
        $car->charge = $request->get('charge');
        $car->restriction = $request->get('restriction');
        $car->kilometer = $request->get('kilometer');
        $car->assurance = $request->get('assurance');
        $car->save();

        Session::flash('success', 'Voiture modifiée avec succès');
        return redirect()->route('admin.car.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = Car::find($id);
        $car->delete();
        Session::flash('success', 'Voiture supprimée avec succès');
        return redirect()->route('admin.car.index');
    }
}
