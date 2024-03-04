<x-app-layout>
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif
    <header class="donor_banner text-center">
       <div class="banner_overlay">
        <div class="header_item">
            <a href="" class="{{Request::is('donor')?'text-danger':''}}">All Donor</a>
            <h4 class="slogan mt-3 ">Someone of your blood type is waiting for your donation.</h4>
            <div class="search flex mt-4">
              <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                  <option class="" selected>Select Blood</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                  <option selected>Select City</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
                <button class="search_btn">Search</button>
          </div>
        </div>
       </div>
    </header>

    <div class="container">
        <div class="row flex mx-auto my-5 gap-3">
        @foreach ($donors as $donor)
        <div class="col-lg-4 col-md-12">
            <div class="card shadow-lg">
                <img class="" src="{{asset('donor/img/'.$donor->image)}}" alt="">
                <div class="card-body">
                  <h5 class="card-title">{{$donor->name}}</h5>
                  <h5 class="card-title">{{$donor->city}}</h5>
                  <h5 class="card-title">{{$donor->blood_group}}</h5>
                  <h5 class="card-title">{{$donor->phone}}</h5>
                  <a href="{{url('donor/detelse/'.$donor->id)}}" class="more mt-5">See More</a>
                </div>
              </div>
          </div>
          @endforeach
        </div>
      </div>

    
</x-app-layout>