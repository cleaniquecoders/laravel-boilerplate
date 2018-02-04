@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-md-center mt-5">
            <div class="col-xs-12 col-sm-8 col-md-6 col-lg-4 col-xl-4">
                @component('components.card', ['card_title' => 'Login'])
                    @slot('card_body')
                        <form method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" id="email"
                                    aria-describedby="emailHelp"
                                    value="{{ old('email') }}"
                                    required autofocus>
                                @if ($errors->has('email'))
                                    <small id="emailHelp" class="form-text text-muted">
                                        {{ $errors->first('email') }}
                                    </small>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password"
                                    aria-describedby="passwordHelp"
                                    value="{{ old('email') }}"
                                    required autofocus>
                                @if ($errors->has('email'))
                                    <small id="passwordHelp" class="form-text text-muted">
                                        {{ $errors->first('password') }}
                                    </small>
                                @endif
                            </div>

                            <div class="form-group">
                                <div class="col-md">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </form>
                    @endslot
                @endcomponent
            </div>
        </div>
    </div>
@endsection
