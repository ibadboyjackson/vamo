<?php

namespace App\Http\Controllers\Admin\Cruise;

use App\Cruise;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

class CruisesController extends Controller
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
        $cruises = Cruise::orderBy('created_at', 'DESC')->paginate(20);
        return view('dashboard.admin.pages.cruises.index')->with('cruises', $cruises);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.admin.pages.cruises.actions.add');
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
            'image' => 'required|image',
            'file' => 'required',
            'from' => 'required',
            'to' => 'required',
            'price' => 'required',
        ]);

        $cruise = new Cruise();

        if($request->hasFile('file')){
            $image = $request->file('file');
            $filename = time(). '.' . $image->getClientOriginalExtension();
            $location = public_path('uploads/' .$filename);
            Image::make($image)->fit(370, 270)->save($location);
            $cruise->file = $filename;
        }
        if($request->hasFile('image')){
            $images = $request->file('image');
            $filenames = time(). '.' . $images->getClientOriginalExtension();
            $location = public_path('uploads/profile/' .$filenames);
            Image::make($images)->fit(300, 130)->save($location);
            $cruise->image = $filenames;
        }

        $cruise->name = $request->get('name');
        $cruise->to = $request->get('to');
        $cruise->from = $request->get('from');
        $cruise->price = $request->get('price');
        $cruise->save();

        Session::flash('success', 'Croisiere ajouté avec succès');
        return redirect()->route('admin.cruise.index');
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
        $cruise = Cruise::findOrFail($id);
        return view('dashboard.admin.pages.cruises.actions.edit')->with('cruise', $cruise);
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
            'image' => 'required|image',
            'file' => 'required',
            'from' => 'required',
            'to' => 'required',
            'price' => 'required',
        ]);

        $cruise = Cruise::find($id);

        if($request->hasFile('file')){
            $image = $request->file('file');
            $filename = time(). '.' . $image->getClientOriginalExtension();
            $location = public_path('uploads/' .$filename);
            Image::make($image)->fit(370, 270)->save($location);
            $cruise->file = $filename;
        }

        if($request->hasFile('image')){
            $images = $request->file('image');
            $filenames = time(). '.' . $images->getClientOriginalExtension();
            $location = public_path('uploads/profile/' .$filenames);
            Image::make($images)->fit(300, 130)->save($location);
            $cruise->image = $filenames;
        }
        $cruise->name = $request->get('name');
        $cruise->to = $request->get('to');
        $cruise->from = $request->get('from');
        $cruise->price = $request->get('price');
        $cruise->save();

        Session::flash('success', 'Croisiere modifié avec succès');
        return redirect()->route('admin.cruise.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cruise = Cruise::find($id);
        $cruise->delete();
        Session::flash('success', 'Croisiere supprimée avec succès');
        return redirect()->route('admin.cruise.index');
    }
}
