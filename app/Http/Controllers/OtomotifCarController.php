<?php

namespace App\Http\Controllers;

use App\Models\OtomotifCar;
use Illuminate\Http\Request;

class OtomotifCarController extends Controller
{
    public function index()
    {
        $Otomotif_Cars = OtomotifCar::all();

        return view('home', compact('Otomotif_Cars'));
    }

    public function add_view(){
        return view('add');
    }
}
