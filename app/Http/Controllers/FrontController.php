<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\Tenants;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $propr = Property::all();
        $count = Property::count();
        $count_user = Tenants::count();
        return view('Frontend.home', compact('propr', 'count', 'count_user'));
    }
    public function rental(){
        $propr = Property::all();
        return view('frontend.rental', compact('propr'));
    }
    public function insert_rental(Request $request){
        Tenants::create($request->all());

        return redirect('/');
    }
}