<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
     <a class="navbar-brand" href="/">AME BLOG</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarNav">
       <ul class="navbar-nav">
         <li class="nav-item {{ ($active === "home") ? 'active' : '' }}">
           <a class="nav-link" href="/">Home <span class="sr-only" (current)></span></a>
         </li>
         <li class="nav-item {{ ($active === "about") ? 'active' : '' }}">
           <a class="nav-link" href="/about">About</a>
         </li>
         <li class="nav-item {{ ($active === "posts") ? 'active' : '' }}">
           <a class="nav-link" href="/posts">Blog</a>
         </li>
         <li class="nav-item {{ ($active === "categories") ? 'active' : '' }}">
           <a class="nav-link" href="/categories">Categories</a>
         </li>
         
       </ul>
       <ul class="navbar-nav ms-auto">
        @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Selamat datang kembali, {{ auth()->user()->name }}
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="/dashboard">My dashboard</a>
              <div class="dropdown-divider"></div>
              <form action="/logout" method="post">
                @csrf
                <button type="submit" class="btn dropdown-item">Logout</button>
              </form>
            </div>
          </li>
        @else
          <li class="nav-item">
            <a href="/login" class="nav-link" {{ ($active === "login") ? 'active' : '' }}><i class="bi bi-box-arrow-in-right"></i>Login</a>
          </li>
        @endauth
      </ul>
     </div>
    </div>
 </nav>
 <script src="{{ asset('js/bootstrap.min.js') }}"></script>