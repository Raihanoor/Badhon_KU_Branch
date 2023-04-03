<div>
    <nav class="sb-topnav navbar navbar-expand" style="background: url('/images/site/back.PNG'); background-repeat: no-repeat; background-size: cover; ">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3 text-warning" href="{{route('dashboard')}}">BloodBank</a>
    
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        
        <!-- Navbar Search-->
        <form action="{{route('blood-search')}}" method="post" class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            {{-- <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for Blood" aria-label="Search for blood" aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div> --}}
        </form>
        <!-- Navbar-->
    
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            @guest
                @if (Route::has('login'))
                    <li>
                        <a class="dropdown-item text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif
    
                @if (Route::has('register'))
                    <li>
                        <a class="dropdown-item text-white"  href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-warning" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i>  {{ Auth::user()->name }}</a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
    
                    <li><a class="dropdown-item" href="#!">Profile</a></li>
                    <li><hr class="dropdown-divider" /></li>
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                         {{ __('Logout') }}
                     </a>
    
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                         @csrf
                     </form>
                    </li>
                </ul>
            @endguest
            </li>
        </ul>
    </nav>
</div>