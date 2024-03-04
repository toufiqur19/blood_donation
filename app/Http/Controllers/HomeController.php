<?php

namespace App\Http\Controllers;

use App\Models\DonorModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.home');
    }
    public function donor()
    {
        $donors = DonorModel::all();
        return view('home.home_donor',compact('donors'));
    }
    public function donor_detels($id)
    {
        $donors = DonorModel::find($id);
        return view('home.donor_detels',compact('donors'));
    }
}
