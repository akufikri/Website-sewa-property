<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function properties()
    {
        $properties = Property::all();

        return view('layouts.properties', compact('properties'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function create_properties(Request $request)
    {
        $data = Property::create($request->all());
        if ($request->hasFile('photo')) {
            $request->file('photo')->move('imageFile/', $request->file('photo')->getClientOriginalName());
            $data->photo = $request->file('photo')->getClientOriginalName();
            $data->save();
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy_propr($id)
    {
        $data = Property::findorfail($id);
        $data->delete($id);

        return redirect()->back();
    }
    /**
     * Display the specified resource.
     */
    public function show_propr($id)
    {
        $data = Property::find($id);

        return view('update.update_propr', compact('data'));
    }
    public function update_propr(Request $request, $id)
    {
        $up = Property::find($id);
        $up->update($request->all());
         if ($request->hasFile('photo')) {
            $request->file('photo')->move('imageFile/', $request->file('photo')->getClientOriginalName());
            $up->photo = $request->file('photo')->getClientOriginalName();
            $up->save();
        }

        return redirect('properties');
    }
    public function restore_prop($id){
        Property::withTrashed()->where('id', $id)->restore();

        return redirect('/properties');

    }
    public function trash(){
        $trash = Property::onlyTrashed()->get();
        return view('layouts.trash_prop', compact('trash'));

    }
    public function permanent_del($id){
        $forceDel = Property::withTrashed()->find($id);
        if ($forceDel) {
            $forceDel->forceDelete();
        }
        return redirect()->back();
    }
}