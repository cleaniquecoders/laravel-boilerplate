<div class="header py-4">
    <div class="container">
        <div class="d-flex">
            {{-- Header Brand --}}
            <a class="header-brand" href="@auth {{ route('home') }} @else {{ url('/') }} @endauth">
                @include('components.logo')
            </a>
            {{-- Right Navigation --}}
            <div class="d-flex order-lg-2 ml-auto">
                <div class="nav-item d-none d-md-flex">
                    @includeWhen(sizeof(locales()) > 1, 'components.language')
                </div>
                <div class="nav-item d-none d-md-flex">  
                    @guest
                        <a class="btn btn-sm btn-outline-default" href="{{ route('login') }}">{{ __('Login') }}</a>
                        <a class="btn btn-sm btn-outline-default" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @else
                        <div class="dropdown">
                            <a class="nav-link pr-0 leading-none dropdown-toggle" id="nav-dropdown" 
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="avatar">
                                    <i class="fe fe-user text-light"></i>
                                </span>
                                <span class="ml-2 d-none d-lg-block">
                                    <span class="text-default">{{ user()->name }}</span>
                                    <small class="text-muted d-block mt-1">{{ user()->rolesToString() }}</small>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow"  aria-labelledby="nav-dropdown">
                                <a class="dropdown-item" href="{{ route('user.show') }}">
                                    <i class="dropdown-icon fe fe-user"></i> {{ __('Profile') }}
                                </a>
                                <a href="{{ route('user.avatar.show') }}" 
                                    class="dropdown-item">
                                    <i class="dropdown-icon fas fa-user-circle"></i> {{ __('Upload Avatar') }}
                                </a>
                                <a href="{{ route('user.password.show') }}" 
                                    class="dropdown-item" >
                                    <i class="dropdown-icon fas fa-lock"></i> {{ __('Security') }}
                                </a>
                                <a href="{{ route('user.logs') }}" 
                                    class="dropdown-item">
                                    <i class="dropdown-icon fas fa-list"></i> {{ __('Log') }}
                                </a>
                                <a class="dropdown-item" href="{{ route('logout') }}" 
                                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                  <i class="dropdown-icon fe fe-log-out"></i> {{ __('Sign out') }}
                                </a>
                            </div>
                        </div>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @endguest
                </div>
            </div>
        </div>
    </div>
</div>