<!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">MyStore</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#">product</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Cart</a></li>
         
          
            @if (Route::has('login'))
             
                            <nav class="navbar-nav">
                                @auth
                                 <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard') }}">dashboard</a></li>
                                
                            @else
                                  <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">log in</a></li>
                                   

                                    @if (Route::has('register'))
                                        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">register</a></li>
                                    @endif
                                @endauth
                            </nav>
            @endif
        </ul>
      </div>
    </div>
  </nav>