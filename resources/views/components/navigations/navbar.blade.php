<!-- As a link -->
<nav class="navbar navbar-light bg-light sticky-top">
    <a class="navbar-brand mb-0 h1" href="{{ url('/') }}">
        {{ config('app.name', 'Laravel') }}
    </a>
    <ul class="nav justify-content-end">
        @guest
            <li class="nav-item">
                <a class="nav-item nav-link active" href="{{ route('login') }}">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-item nav-link active" href="{{ route('register') }}">Register</a>
            </li>
        @else
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @if(auth()->user()->getLastMediaUrl('avatar','thumbnail_navbar'))
                        <img src="{{ auth()->user()->getLastMediaUrl('avatar', 'thumbnail_navbar') }}"
                            alt="avatar"
                            class="img-rounded">
                    @endif
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    {{ html()->a(route('show.avatar'), 'Avatar')->class('dropdown-item') }}
                    {{ html()->a(route('logs'), 'Logs')->class('dropdown-item') }}
                    {{ html()->a(route('logout'), 'Logout')->class('dropdown-item')->attribute('onclick', 'event.preventDefault();document.getElementById("logout-form").submit();') }}
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
            </li>
        @endguest
    </ul>
</nav>
