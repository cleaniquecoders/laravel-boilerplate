<div class="d-flex justify-content-center align-items-center pt-3 mt-3">
    <a class="navbar-brand h1" href="{{ route('welcome') }}">
        {{ config('app.name', 'Laravel') }}
    </a>
</div>
<div class="sidebar-sticky">
    <hr>
    @component('components.navigations.sidebar-heading')
        @slot('label')
            @if(auth()->user()->getLastMediaUrl('avatar','thumbnail_navbar'))
                <img src="{{ auth()->user()->getLastMediaUrl('avatar', 'thumbnail_navbar') }}"
                    alt="avatar"
                    class="img-rounded">
            @else
                <i class="fa fa-user-circle fa-7x"></i>
            @endif
            <hr>
            {{ Auth::user()->name }}
        @endslot
    @endcomponent
    <hr>
    @include('components.navigations.sidebar-heading', ['label' => 'Profile'])
    <ul class="nav flex-column">
        <li class="nav-item">
            {{ html()->a(route('show.avatar'), 'Avatar')->class('nav-link') }}
        </li>
        <li class="nav-item">
            {{ html()->a(route('logs'), 'Logs')->class('nav-link') }}
        </li>
    </ul>
</div>
