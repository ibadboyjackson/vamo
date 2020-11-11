<?php

namespace App\Http\Controllers\Admin\Circuit;

use App\Circuit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\ValidationException;
use Intervention\Image\Facades\Image;

class CircuitsController extends Controller
{
    public function __construct()
    {
        $this->middleware('isAdmin');
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $circuits = Circuit::orderBy('created_at', 'DESC')->paginate(20);
        return view('dashboard.admin.pages.circuits.index')->with('circuits', $circuits);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('dashboard.admin.pages.circuits.actions.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     * @throws ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'from' => 'required',
            'to' => 'required',
            'tour_number' => 'required',
            'price' => 'required',
            'file' => 'required|image',
        ]);

        $circuit = new Circuit();

        if($request->hasFile('file')){
            $image = $request->file('file');
            $filename = time(). '.' . $image->getClientOriginalExtension();
            $location = public_path('uploads/' .$filename);
            Image::make($image)->fit(310, 201)->save($location);
            $circuit->file = $filename;
        }

        $circuit->name = $request->get('name');
        $circuit->from = $request->get('from');
        $circuit->to = $request->get('to');
        $circuit->price = $request->get('price');
        $circuit->tour_number = $request->get('tour_number');
        $circuit->save();

        Session::flash('success', 'Circuit ajouté avec succès');
        return redirect()->route('admin.circuit.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $circuit = Circuit::findOrFail($id);
        return view('dashboard.admin.pages.circuits.actions.edit')->with('circuit', $circuit);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int $id
     * @return Response
     * @throws ValidationException
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'from' => 'required',
            'to' => 'required',
            'tour_number' => 'required',
            'price' => 'required',
            'file' => 'required|image',
        ]);

        $circuit = Circuit::find($id);

        if($request->hasFile('file')){
            $image = $request->file('file');
            $filename = time(). '.' . $image->getClientOriginalExtension();
            $location = public_path('uploads/' .$filename);
            Image::make($image)->fit(310, 201)->save($location);
            $circuit->file = $filename;
        }

        $circuit->name = $request->get('name');
        $circuit->from = $request->get('from');
        $circuit->to = $request->get('to');
        $circuit->price = $request->get('price');
        $circuit->tour_number = $request->get('tour_number');
        $circuit->save();

        Session::flash('success', 'Circuit modifié avec succès');
        return redirect()->route('admin.circuit.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $circuit = Circuit::find($id);
        $circuit->delete();
        Session::flash('success', 'Circuit supprimé avec succès');
        return redirect()->route('admin.circuit.index');
    }
}
