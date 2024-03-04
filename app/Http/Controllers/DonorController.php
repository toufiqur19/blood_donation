<?php

namespace App\Http\Controllers;

use App\Models\DonorModel;
use Illuminate\Http\Request;

class DonorController extends Controller
{
    public function donorCreate()
    {
        return view('home.donor_create');
    }
    public function homeStore(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required',
            'location' => 'required',
            'blood_group' => 'required',
            'gender' => 'required',
            'religion' => 'required',
            'profession' => 'required',
            'total_donat' => 'required',
            'image' => 'nullable|mimes:jpg,png,jpeg,gif,svg',
            'dob' => 'required',
            'last_donat' => 'required',
            'about' => 'nullable',
            'fb' => 'nullable',
            'tw' => 'nullable',
            'in' => 'nullable',
        ]);
        $imgFile = time().'.'.$request->image->extension();
        $request->image -> move(public_path('donor/img'),$imgFile);

        DonorModel::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'city' => $request->city,
            'location' => $request->location,
            'blood_group' => $request->blood_group,
            'gender' => $request->gender,
            'religion' => $request->religion,
            'profession' => $request->profession,
            'total_donat' => $request->total_donat,
            'image' => $imgFile,
            'dob' => $request->dob,
            'last_donat' => $request->last_donat,
            'about' => $request->about,
            'fb' => $request->fb,
            'tw' => $request->tw,
            'in' => $request->in,
        ]);
        
        return redirect('home/donor')->with('message','create post successfuly');
    }
}
