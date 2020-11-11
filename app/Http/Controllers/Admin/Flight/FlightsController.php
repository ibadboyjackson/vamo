<?php

namespace App\Http\Controllers\Admin\Flight;

use App\Flight;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

class FlightsController extends Controller
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
        $flights = Flight::orderBy('created_at', 'DESC')->paginate(20);
        return view('dashboard.admin.pages.flights.index')->with('flights', $flights);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.admin.pages.flights.actions.add');
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
            'company_name' => 'required',
            'from' => 'required',
            'to' => 'required',
            'price' => 'required',
            'file' => 'required|image',
            'adult_number' => 'required',
            'child_number' => 'required',
            'date_depart' => 'required',
            'date_back' => 'required'
        ]);

        $flight = new Flight();

        if($request->hasFile('file')){
            $image = $request->file('file');
            $filename = time(). '.' . $image->getClientOriginalExtension();
            $location = public_path('uploads/' .$filename);
            Image::make($image)->fit(90, 87)->save($location);
            $flight->file = $filename;
        }

        $flight->company_name = $request->get('company_name');
        $flight->from = $request->get('from');
        $flight->to = $request->get('to');
        $flight->price = $request->get('price');
        $flight->date_depart = $request->get('date_depart');
        $flight->date_back = $request->get('date_back');
        $flight->child_number = $request->get('child_number');
        $flight->adult_number = $request->get('adult_number');
        $flight->save();

        Session::flash('success', 'Vol ajouté avec succès');
        return redirect()->route('admin.flight.index');
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
        $flight = Flight::findOrFail($id);
        return view('dashboard.admin.pages.flights.actions.edit')->with('flight', $flight);
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
            'company_name' => 'required',
            'from' => 'required',
            'to' => 'required',
            'price' => 'required',
            'file' => 'required|image',
            'adult_number' => 'required',
            'child_number' => 'required',
            'date_depart' => 'required',
            'date_back' => 'required'
        ]);

        $flight = Flight::find($id);

        if($request->hasFile('file')){
            $image = $request->file('file');
            $filename = time(). '.' . $image->getClientOriginalExtension();
            $location = public_path('uploads/' .$filename);
            Image::make($image)->fit(90, 87)->save($location);
            $flight->file = $filename;
        }

        $flight->company_name = $request->get('company_name');
        $flight->from = $request->get('from');
        $flight->to = $request->get('to');
        $flight->price = $request->get('price');
        $flight->date_depart = $request->get('date_depart');
        $flight->date_back = $request->get('date_back');
        $flight->child_number = $request->get('child_number');
        $flight->adult_number = $request->get('adult_number');
        $flight->save();

        Session::flash('success', 'Vol edité avec succès');
        return redirect()->route('admin.flight.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $flight = Flight::find($id);
        $flight->delete();
        Session::flash('success', 'Vol supprimé avec succès');
        return redirect()->route('admin.flight.index');
    }
}
