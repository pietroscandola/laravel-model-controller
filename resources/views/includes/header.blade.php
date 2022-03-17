<nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <div class="container">      
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav">
          <li class="nav-item pe-4 {{request()->routeIs('home') ? 'active' : ''}}">
            <a class="nav-link fw-bold" href="{{route('home')}}">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bold" href="{{route('movies.index')}}">MOVIES</a>
          </li>          
        </ul>
      </div>
    </div>
</nav>