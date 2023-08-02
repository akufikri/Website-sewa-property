<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\Tenants;
use Illuminate\Http\Request;

class TenantsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function tenants()
    {
        $tenants = Tenants::with('property')->paginate();
        $property = Property::all();
        return view('layouts.tenants', compact('tenants', 'property'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function insert_ten(Request $request)
    {
        Tenants::create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show_ten($id)
    {
        $ten = Tenants::with('property')->find($id);
        $prop = Property::where('id', '!=', $ten->property_id)->get(['id','title']);
        return view('update.update_ten', compact('ten', 'prop'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update_ten(Request $request, $id)
    {
        $data = Tenants::with('property')->find($id);
        $data->update($request->all());
        
        return redirect('/tenants');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy_ten($id)
    {
        $ten = Tenants::findorfail($id);
        $ten->delete($id);

        return redirect()->back();
    }
    public function trash(){
        $trash_history = Tenants::onlyTrashed()->get();
        return view('layouts.trash', compact('trash_history'));
    }
    public function restore_ten($id){
        $restore_del = Tenants::withTrashed()->where('id', $id)->restore();
        return redirect('/tenants');
    }
    public function force_delete($id){
        $forceDel = Tenants::withTrashed()->find($id);
        if ($forceDel) {
            $forceDel->forceDelete();
        }

        return redirect()->back();
    }
}