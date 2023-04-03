<div class="wrapper" id="nav_background">
     <nav id="topnav">
       <ul class="clear">
         @if (Route::has('login'))
            @auth
                    <li class="nav-item" title="Home">  
                        <a href="{{ route('homepage') }}" class="nav-link text-md">Homepage</a>
                    </li> 
                    <li><a href="{{route('posted-requests')}}" title="All Requests">All Requests</a></li>
                    <li><a href="{{route('manage-blood')}}" class="nav-link" title="manage-blood">Send Blood Request</a></li>
                    <li><a href="{{route('donor')}}" class="nav-link" title="About Us">Donors</a></li>
                    <li><a href="{{route('contact')}}" class="nav-link" title="About Us">Contact</a></li>
                    <li><a href="{{route('about')}}" class="nav-link" title="About Us">About Us</a></li>
                    <li><a href="{{route('search')}}" class="nav-link" title="About Us">Search</a></li>
                    
                    @if(auth()->user()->role=='user')
                    
                    <li class="nav-item" title="Become A Hero">  
                      <a href="{{ route('become-a-hero') }}" class="nav-link text-sm underline">Become A Hero</a>
                    </li> 

                    @endif

                    @if(auth()->user()->role=='admin')
                    <li class="nav-item" title="Dashboard">  
                        <a href="{{ route('dashboard') }}" class="nav-link text-sm underline">Dashboard</a>
                    </li> 
                    @endif
                    
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i>  {{ Auth::user()->name }}</a>
                      <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
        
                          <li>
                              <a class="dropdown-item text-dark" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                               {{ __('Logout') }}
                           </a>
          
                           <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                               @csrf
                           </form>
                          </li>
                      </ul>

                  </li>
                @else
                    <li><a href="{{route('homepage')}}" title="Homepage">Homepage</a></li>
                    <li><a href="{{route('posted-requests')}}" title="Homepage">All Requests</a></li>
                    <li><a href="{{route('manage-blood')}}" class="nav-link" title="manage-blood">Send Blood Request</a></li>
                    <li><a href="{{route('donor')}}" class="nav-link" title="About Us">Donors</a></li>
                    <li><a href="{{route('contact')}}" class="nav-link" title="About Us">Contact</a></li>
                    <li><a href="{{route('about')}}" class="nav-link" title="About Us">About Us</a></li>
                    <li><a href="{{route('search')}}" class="nav-link" title="About Us">Search</a></li> 
                    @if (Route::has('register'))
                    <li class="nav-item" title="register">  
                        <a href="{{ route('register-view') }}" class="nav-link text-sm underline">Register</a>
                    </li>    
                    @endif
                   
                    <li class="nav-item" title="Login">
                        <a href="{{ route('login') }}" class="nav-link text-sm underline">Log in</a>
                    </li>  

              @endauth
          @endif 
       </ul>
     </nav>
</div>

{{-- <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-danger">
        <a class="navbar-brand" href="#">Bloodbank Management system </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link text-sm" href="#">Home</a>
            </li>
        @if (Route::has('login'))
            @auth
                <li class="nav-item">  
                    <a href="{{ url('/home') }}" class="nav-link text-md">Home</a>
                </li> 
                @else
                <li class="nav-item">
                    <a href="{{ route('login') }}" class="nav-link text-sm underline">Log in</a>
                </li>  
                @if (Route::has('register'))
                <li class="nav-item">  
                    <a href="{{ route('register') }}" class="nav-link text-sm underline">Register</a>
                </li>    
                @endif
             @endauth
        @endif 
          </ul>
        </div>
      </nav>
</div> --}}