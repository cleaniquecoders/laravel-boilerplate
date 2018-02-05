<!-- As a link -->
<nav class="navbar navbar-light bg-light sticky-top">
    @guest
        <a class="navbar-brand h1" href="{{ route('welcome') }}">
            {{ config('app.name', 'Laravel') }}
        </a
    @else
        <a class="navbar-brand mb-0 h1" href="{{ route('home') }}">
            <i class="fa fa-home"></i>
        </a>
    @endguest

    <nav class="nav justify-content-end">
        @guest
            <a class="nav-item nav-link" href="{{ route('login') }}">Login</a>
            <a class="nav-item nav-link" href="{{ route('register') }}">Register</a>
        @else
            {{ html()
                ->a(route('logout'), 'Logout')
                ->class('nav-item nav-link')
                ->attribute('onclick', 'event.preventDefault();document.getElementById("logout-form").submit();') }}
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        @endguest
    </nav>
</nav>
