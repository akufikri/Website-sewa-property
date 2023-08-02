<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\Tenants;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function dashboard(){
        $data_1 = Property::all();
        $data_2 = Tenants::with('property')->paginate();
        return view('layouts.dashboard', compact('data_1','data_2'));
    }
}