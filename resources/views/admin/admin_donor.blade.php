@extends('admin.layout')
@section('main')
<section class="donor mt-4 mx-4 h-100 text-black">
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif
    <div class="pt-3 px-4 flex justify-content-between ">
        <p class="title">Donor</p>
        <a class="btn btn-md btn-primary" href="{{route('create')}}">Create</a></td>
    </div>

    

<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded">
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-dark">
                        <th scope="col">Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">City</th>
                        <th scope="col">Group</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Image</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach ($donors as $donor)
                    
                        <tr>
                            <th scope="row">{{$donor->name}}</th>
                            <td>{{$donor->phone}}</td>
                            <td>{{$donor->city}}</td>
                            <td>{{$donor->blood_group}}</td>
                            <td>{{$donor->gender}}</td>
                            <td>
                            <img src="{{asset('donor/img/'.$donor->image)}}" alt="" width="30" height="30">
                            </td>
                            <td><a class="btn btn-sm btn-primary" href="{{url('donor/edit/'.$donor->id)}}">Edit</a></td>
                            <td><a class="btn btn-sm btn-primary" href="{{url('donor/delete/'.$donor->id)}}">Delete</a></td>
                        </tr>

                        @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</section>
@endsection