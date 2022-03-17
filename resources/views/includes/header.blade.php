<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">      
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav">
          <li class="nav-item pe-4 {{request()->routeIs('home') ? 'active' : ''}}">
            <a class="nav-link fw-bold" href="#">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bold" href="#">MOVIES</a>
          </li>          
        </ul>
      </div>
    </div>
</nav>