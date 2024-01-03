<nav class="navbar bg-body-tertiary border-bottom py-3">
  <div class="container">
    <a class="navbar-brand" href="#">
        <img 
          src="{{ asset(config('adminlte.auth_logo.img.path')) }}" 
          alt="Logo" 
          width="30" 
          height="24" 
          class="d-inline-block align-text-top"
        >
        e-Perpus
    </a>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="/login-petugas">Login</a>
      </li>
    </ul>
  </div>
</nav>
