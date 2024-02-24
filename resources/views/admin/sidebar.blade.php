<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="{{route('admin')}}" class="navbar-brand mx-4 mb-3">
            <h3 class="text-black"><i class="fa-solid fa-droplet me-2"></i>Liquid Love</h3>
        </a>
        <div class="navbar-nav w-100">
            <a href="{{route('admin')}}" class="nav-item nav-link {{Request::is('admin')?'active':''}}"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <a href="{{route('donor')}}" class="nav-item nav-link {{Request::is('admin/donor')?'active':''}}"><i class="fa-solid fa-droplet me-2"></i>Donor</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="blank.html" class="dropdown-item">Blank Page</a>
                </div>
            </div>
            
        </div>
    </nav>
</div>