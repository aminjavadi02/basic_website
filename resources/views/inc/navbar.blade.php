<nav class="navbar navbar-expand navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('home')}}">Home!</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link {{Route::is('about') ? 'active' : ''}}" href="{{route('about')}}">about</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Route::is('contact') ? 'active' : ''}}" href="{{route('contact')}}">contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Route::is('get-messages') ? 'active' : ''}}" href="{{route('get-messages')}}">messages</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>