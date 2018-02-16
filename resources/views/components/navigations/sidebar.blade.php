<ul class="list-group list-group-flush text-center">
    <li class="list-group-item">
        <a class="nav-link text-primary" 
            href="@guest {{ route('welcome') }} @else {{ route('home') }} @endguest"
            @include('components.tooltip', ['tooltip' => 'Home', 'pos' => 'down'])>
            <i class="fas fa-home"></i>
        </a>
    </li>
    @auth
    <li class="list-group-item">   
        <a class="nav-link text-primary" 
        href="{{ route('user.show') }}" 
        @include('components.tooltip', ['tooltip' => 'Profile', 'pos' => 'down'])>
            <i class="fas fa-user"></i>
        </a>
    </li>
    <li class="list-group-item">
        <a href="{{ route('logout') }}" 
        class="nav-link text-danger"
        title="Logout" 
        @include('components.tooltip', ['tooltip' => 'Logout', 'pos' => 'down'])
        onclick="event.preventDefault();document.getElementById('logout-form').submit();">
        <i class="fas fa-sign-out-alt"></i>
        </a>
    </li>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
    @endauth
</ul>