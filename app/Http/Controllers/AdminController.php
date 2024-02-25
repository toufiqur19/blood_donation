<?php

namespace App\Http\Controllers;

use App\Models\DonorModel;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.admin_dashboard');
    }

    public function adminDonor()
    {
        $donors = DonorModel::all();
        return view('admin.admin_donor',compact('donors'));
    }
    public function create()
    {
        return view('admin.donor_create');
    }

    public function store(Request $request)
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
        
        return redirect('admin/donor')->with('message','create post successfuly');
    }

    public function edit($id)
    {
        $editDonors = DonorModel::find($id);
        return view('admin.admin_donor_edit',compact('editDonors'));
    }

    public function update(Request $request,$id)
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
        $donorUpdate = DonorModel::find($id);

        if(isset($request->image))
        {
            $imgFile = time().'.'.$request->image->extension();
            $request->image -> move(public_path('donor/img'),$imgFile);
            $donorUpdate-> image = $imgFile;
        }
        
            $donorUpdate-> name = $request->name;
            $donorUpdate-> email = $request->email;
            $donorUpdate-> phone = $request->phone;
            $donorUpdate-> address = $request->address;
            $donorUpdate-> city = $request->city;
            $donorUpdate-> location = $request->location;
            $donorUpdate-> blood_group = $request->blood_group;
            $donorUpdate-> gender = $request->gender;
            $donorUpdate-> religion = $request->religion;
            $donorUpdate-> profession = $request->profession;
            $donorUpdate-> total_donat = $request->total_donat;
            $donorUpdate-> dob = $request->dob;
            $donorUpdate-> last_donat = $request->last_donat;
            $donorUpdate-> about = $request->about;
            $donorUpdate-> fb = $request->fb;
            $donorUpdate-> tw = $request->tw;
            $donorUpdate-> in = $request->in;
            $donorUpdate-> save();
        
        return redirect('admin/donor')->with('message','update post successfuly');
    }
    public function delete($id)
    {
        $deteteDonors = DonorModel::find($id);
        $deteteDonors->delete();
        return redirect('admin/donor')->with('message','Delete successfuly');
    }
}
