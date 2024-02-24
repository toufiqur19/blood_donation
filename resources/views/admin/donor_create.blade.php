@extends('admin.layout')
@section('main')
<section class="donor mt-4 mx-4 text-black mb-5">
    <div class="pt-3 px-5 flex justify-content-between ">
        <p class="title">Donor / <span class="{{Request::is('admin/donor/create')?'text-primary':''}}">Create</span></p>
        <a class="btn btn-md btn-primary" href="{{route('donor')}}">Back</a></td>
    </div>
    <div class="px-5 mt-4 mb-4">
        <form action="{{route('store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="flex gap-3">
                <div class="mb-3 w-100 ">
                    <label for="" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control h-50" {{old('name')}}>
                    @if($errors->has('name'))
                    <p class="text-danger">{{ $errors->first('name') }}</p>
                    @endif
                  </div>
                  <div class="mb-3 w-100 ">
                    <label for="" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control h-50" {{old('email')}}>
                    @if($errors->has('email'))
                    <p class="text-danger">{{ $errors->first('email') }}</p>
                    @endif
                  </div>
            </div>
            
            <div class="flex gap-3">
                <div class="mb-3 w-100 ">
                    <label for="" class="form-label">Phone</label>
                    <input type="text" name="phone" class="form-control h-50" {{old('phone')}}>
                    @if($errors->has('phone'))
                    <p class="text-danger">{{ $errors->first('phone') }}</p>
                    @endif
                  </div>
                  <div class="mb-3 w-100 ">
                    <label for="" class="form-label">City</label>
                    <input type="text" name="city" class="form-control h-50" {{old('city')}}>
                    @if($errors->has('city'))
                    <p class="text-danger">{{ $errors->first('city') }}</p>
                    @endif
                  </div>
            </div>

            <div class="flex gap-3">
                <div class="mb-3 w-100 ">
                    <label for="" class="form-label">Location</label>
                    <input type="text" name="location" class="form-control h-50" {{old('location')}}>
                    @if($errors->has('location'))
                    <p class="text-danger">{{ $errors->first('location') }}</p>
                    @endif
                  </div>
                  <div class="mb-3 w-100 ">
                    <label for="" class="form-label">Address</label>
                    <input type="text" name="address" class="form-control h-50" {{old('address')}}>
                    @if($errors->has('address'))
                    <p class="text-danger">{{ $errors->first('address') }}</p>
                    @endif
                  </div>
            </div>

            <div class="flex gap-3">
                <div class="mb-3 w-100 ">
                    <label for="" class="form-label">Blood Group</label>
                    <select class="form-control h-50" id="gender" name="blood_group" {{old('blood_group')}}>
                        <option value="Select">Select</option>
                        <option value="O">O</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                        <option value="A+">A+</option>
                        <option value="B+">B+</option>
                        <option value="AB">AB</option>
                      </select>
                    @if($errors->has('blood_group'))
                    <p class="text-danger">{{ $errors->first('blood_group') }}</p>
                    @endif
                  </div>
                  <div class="mb-3 w-100 ">
                    <label for="" class="form-label">Gender</label>
                    <select class="form-control h-50" id="gender" name="gender" {{old('gender')}}>
                        <option value="Select">Select</option>
                        <option value="Mail">Mail</option>
                        <option value="Femail">Femail</option>
                      </select>
                    @if($errors->has('gender'))
                    <p class="text-danger">{{ $errors->first('gender') }}</p>
                    @endif
                  </div>
            </div>

            <div class="flex gap-3">
                <div class="mb-3 w-100 ">
                    <label for="" class="form-label">Religion</label>
                    <input type="text" name="religion" class="form-control h-50" {{old('religion')}}>
                    @if($errors->has('religion'))
                    <p class="text-danger">{{ $errors->first('religion') }}</p>
                    @endif
                  </div>
                  <div class="mb-3 w-100 ">
                    <label for="" class="form-label">Profession</label>
                    <input type="text" name="profession" class="form-control h-50" {{old('profession')}}>
                    @if($errors->has('profession'))
                    <p class="text-danger">{{ $errors->first('profession') }}</p>
                    @endif
                  </div>
            </div>

            <div class="flex gap-3">
                <div class="mb-3 w-100 ">
                    <label for="" class="form-label">Total Donat</label>
                    <input type="number" name="total_donat" class="form-control h-50" {{old('total_donat')}}>
                    @if($errors->has('total_donat'))
                    <p class="text-danger">{{ $errors->first('total_donat') }}</p>
                    @endif
                  </div>
                  <div class="mb-3 w-100 ">
                    <label for="" class="form-label">DOB</label>
                    <input type="date" name="dob" class="form-control h-50" {{old('dob')}}>
                    @if($errors->has('dob'))
                    <p class="text-danger">{{ $errors->first('dob') }}</p>
                    @endif
                  </div>
            </div>

            <div class="flex gap-3">
                <div class="mb-3 w-100 ">
                    <label for="" class="form-label">Last Donat</label>
                    <input type="date" name="last_donat" class="form-control h-50" {{old('last_donat')}}>
                    @if($errors->has('last_donat'))
                    <p class="text-danger">{{ $errors->first('last_donat') }}</p>
                    @endif
                  </div>
                  <div class="mb-3 w-100 ">
                    <label for="" class="form-label">In</label>
                    <input type="number" name="in" class="form-control h-50" {{old('in')}}>
                    @if($errors->has('in'))
                    <p class="text-danger">{{ $errors->first('in') }}</p>
                    @endif
                  </div>
            </div>

            <div class="flex gap-3">
                <div class="mb-3 w-100 ">
                    <label for="" class="form-label">Fb</label>
                    <input type="number" name="fb" class="form-control h-50" {{old('fb')}}>
                    @if($errors->has('fb'))
                    <p class="text-danger">{{ $errors->first('fb') }}</p>
                    @endif
                  </div>
                  <div class="mb-3 w-100 ">
                    <label for="" class="form-label">Tw</label>
                    <input type="text" name="tw" class="form-control h-50" {{old('tw')}}>
                    @if($errors->has('tw'))
                    <p class="text-danger">{{ $errors->first('tw') }}</p>
                    @endif
                  </div>
            </div>

            <div class="flex gap-3">
                <div class="mb-3 w-100 ">
                    <label for="" class="form-label">About</label>
                    <textarea name="about" class="form-control h-50" {{old('about')}}></textarea>
                    @if($errors->has('about'))
                    <p class="text-danger">{{ $errors->first('about') }}</p>
                    @endif
                  </div>
            </div>
           <div class="flex justify-content-between ">
            <input type="file" name="image">
            <button type="submit" name="submit" class="btn bg-primary">Submit</button>
        </div>
          </form>
    </div>
</section>
@endsection