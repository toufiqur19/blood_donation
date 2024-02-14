<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container-fluid mx-3">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler collapsed d-flex d-lg-none flex-column justify-content-around" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="toggler-icon top-bar"></span>
      <span class="toggler-icon middle-bar"></span>
      <span class="toggler-icon bottom-bar"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link text-white dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>  
      </ul>
      @guest
      <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link text-white" href="{{route('login')}}">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="{{route('register')}}">Register</a>
            </li>
      </ul>  
      @endguest
      
      @auth
      <!-- Settings Dropdown -->
      <div class="hidden sm:flex sm:items-center sm:ms-6 text-light">
         <x-dropdown align="right" width="48">
             <x-slot name="trigger">
                 <button class="inline-flex items-center px-3 py-2 text-[1rem] leading-4 font-medium rounded-md text-black hover:text-[#F9BFD8] focus:outline-none transition ease-in-out duration-150">
                     <div>{{ Auth::user()->name }}</div>

                     <div class="ms-1">
                         <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                             <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                         </svg>
                     </div>
                 </button>
             </x-slot>

             <div class="auth bg-black ">
              <x-slot name="content" class="pt-3">
                <x-dropdown-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-dropdown-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}" >
                    @csrf

                    <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
            </x-slot>
             </div>
         </x-dropdown>
     </div>
      @endauth

    </div>
  </div>
</nav>

{{-- <nav class="navbar navbar-expand-lg text-white">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent" id="navbarNav">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link text-white dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>  
        </ul>
        @guest
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-white" href="{{route('login')}}">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="{{route('register')}}">Register</a>
              </li>
        </ul>  
        @endguest
        
        @auth
        <!-- Settings Dropdown -->
        <div class="hidden sm:flex sm:items-center sm:ms-6">
           <x-dropdown align="right" width="48">
               <x-slot name="trigger">
                   <button class="inline-flex items-center px-3 py-2 text-[1rem] leading-4 font-medium rounded-md text-black hover:text-[#F9BFD8] focus:outline-none transition ease-in-out duration-150">
                       <div>{{ Auth::user()->name }}</div>

                       <div class="ms-1">
                           <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                               <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                           </svg>
                       </div>
                   </button>
               </x-slot>

               <x-slot name="content">
                   <x-dropdown-link :href="route('profile.edit')">
                       {{ __('Profile') }}
                   </x-dropdown-link>

                   <!-- Authentication -->
                   <form method="POST" action="{{ route('logout') }}">
                       @csrf

                       <x-dropdown-link :href="route('logout')"
                               onclick="event.preventDefault();
                                           this.closest('form').submit();">
                           {{ __('Log Out') }}
                       </x-dropdown-link>
                   </form>
               </x-slot>
           </x-dropdown>
       </div>
        @endauth

      </div>
    </div>
  </nav> --}}