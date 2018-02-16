<nav class="navbar navbar-expand-md navbar-light sticky-top">
    <div class="container">
        <a class="navbar-brand" 
            href="@guest {{ route('welcome') }} @else {{ route('home') }} @endguest"
            @include('components.tooltip', ['tooltip' => 'Home', 'pos' => 'down'])>
            <i class="fas fa-home"></i>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                    <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                @else
                    <li><a href="{{ route('user.show') }}" 
                        class="nav-link">
                        {{ Auth::user()->name }}</a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}" 
                        class="nav-link"
                        title="Logout" 
                        @include('components.tooltip', ['tooltip' => 'Logout', 'pos' => 'down'])
                        onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i>
                        </a>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
                @endguest
            </ul>
        </div>
    </div>
</nav>
