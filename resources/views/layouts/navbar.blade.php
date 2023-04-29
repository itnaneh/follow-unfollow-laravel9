<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container-fluid">
    <a class="navbar-brand" href="#" style="
        padding: 0.5rem 0.8rem;
        background:#ff274b;
        border-radius: 0.5rem;
        
        font-size: 0.9rem;
        color:black ;
        letter-spacing: .1rem;
        font-weight: 600; ">Laravel Follow Unfollow</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="" id="navbarSupportedContent" style="font-size: 150%">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" style="
       padding: 0.5rem 0.8rem;
        background:#ff274b;
        border-radius: 0.5rem;
        box-shadow: 0 0 0.5rem #ff274b;
        font-size: 0.9rem;
        color:black ;
        letter-spacing: .1rem;
        font-weight: 600;"href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Account
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            @guest
            <li><a class="dropdown-item" href="{{route('register')}} ">Register</a></li>
            <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
            @endguest
            
            <li><hr class="dropdown-divider"></li>
            @auth
            <li><a class="dropdown-item" href="#">{{auth()->user()->name}}</a></li>
            <li><a class="dropdown-item" onclick="document.getElementById('logoutForm').submit();" href="#">Logout</a></li>
            
            <form action="{{route('logout')}}" method="POST" id="logoutForm">
            @csrf
            </form>
            @endauth
            
        </ul>
        </li>
    </ul>
    
    </div>
</div>
</nav>