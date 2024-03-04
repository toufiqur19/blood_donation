<x-app-layout>
    <header class="donor_banner text-center">
        <div class="banner_overlay">
            <div class="header_item">
                <a href="" class="{{ Request::is('donor') ? 'text-danger' : '' }}">Donor Detels</a>
                <h4 class="slogan mt-3 ">Someone of your blood type is waiting for your donation.</h4>
            </div>
        </div>
    </header>

    <div class="donor_detile">
        <div class="row">
            <div class="col-md-4">
                <h1><i class="fa-solid fa-droplet"></i> Blood Group: <span class="d_color fw-bold ">
                        {{ $donors->blood_group }}</span></h1>
            </div>
            <div class="col-md-5">
                <h1><i class="fa-solid fa-calendar-days"></i> Last Donate: <span class="d_color fw-bold ">
                        {{ $donors->last_donat }}</span></h1>
            </div>
            <div class="col-md-3">
                <h1><i class="fa-solid fa-file-invoice"></i> Total Donate: <span class="d_color fw-bold ">
                        {{ $donors->total_donat }}</span></h1>
            </div>
        </div>
    </div>

    <div class="container pt-4 pb-5">
        <div class="donor_detiles mt-5 py-5 bg-white shadow text-center">
            <img class="pb-3" src="{{asset('donor/img/'.$donors->image)}}" alt="">
            <h5 class="card-title">Name : {{ $donors->name }}</h5>
            <h5 class="card-title">Gender : {{ $donors->gender }}</h5>
            <h5 class="card-title">Religion : {{ $donors->religion }}</h5>
            <h5 class="card-title">Profession : {{ $donors->profession }}</h5>
            <h5 class="card-title">DOB : {{ $donors->dob }}</h5>
            <h5 class="card-title">Blood Group : {{ $donors->blood_group }}</h5>
            <h5 class="card-title">Phone : {{ $donors->phone }}</h5>
            <h5 class="card-title">Email : {{ $donors->email }}</h5>
            <h5 class="card-title">Address : {{ $donors->address }}</h5>
        </div>
    </div>
</x-app-layout>
