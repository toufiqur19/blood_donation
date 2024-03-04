<x-app-layout>
    <header class="home_banner text-center">
        <div class="banner_overlay">
         <div class="header_item">
             <a href="" class="{{Request::is('donor')?'text-danger':''}}">Home</a>
             <h4 class="slogan mt-3 ">Someone of your blood type is waiting for your donation.</h4>
             <div class="search flex mt-4">
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected>Select Blood</option>
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
</x-app-layout>