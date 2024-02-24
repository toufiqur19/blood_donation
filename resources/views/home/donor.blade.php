<x-app-layout>
    <header class="banner text-center">
        <div class="img">
            <img src="{{asset('assets/img/3.png')}}" alt="">
        </div>
        <div class="header_item">
            <a href="">home / </a>
            <a href="" class="{{Request::is('donor')?'text-danger':''}}">donor</a>
            <h4 class="slogan mt-3 ">Someone of your blood type is waiting for your donation.</h4>
        </div>
    </header>
</x-app-layout>