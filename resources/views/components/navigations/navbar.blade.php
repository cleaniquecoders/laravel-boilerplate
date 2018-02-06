<nav id="navbar-example2" class="navbar navbar-light bg-light">
  @guest
    <a class="navbar-brand" href="{{ route('welcome') }}">
      {{ config('app.name', 'Laravel') }}
    </a>
  @else
    <a class="navbar-brand" href="{{ route('home') }}">
      <i class="fa fa-home"></i>
    </a>
  @endguest
  <ul class="nav nav-pills">
    @guest
    <li class="nav-item">
      <a class="nav-link" href="{{ route('login') }}">Login</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" {{ route('register') }}">Register</a>
    </li>
    @else
      <li class="nav-item">
        <a href="{{ route('logout') }}"
        onclick="event.preventDefault();document.getElementById('logout-form').submit();"
        class="nav-link">Logout</a>
      </li>
    @endguest
  </ul>
  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
</nav>
