@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-md-center mt-5">
            <div class="col-xs-12 col-sm-8 col-md-6 col-lg-4 col-xl-4">
                @component('components.card', ['card_title' => 'Avatar'])
                    @slot('card_body')
                        <form method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input id="name" type="text" class="form-control"
                                    aria-describedby="nameHelp"
                                    name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <small id="nameHelp" class="form-text text-muted">
                                        {{ $errors->first('name') }}
                                    </small>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="email">E-Mail Address</label>
                                <input id="email" type="email" class="form-control"
                                    aria-describedby="emailHelp"
                                    name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <small id="emailHelp" class="form-text text-muted">
                                        {{ $errors->first('email') }}
                                    </small>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>

                                <input id="password" type="password" class="form-control"
                                    aria-describedby="passwordHelp"
                                    name="password" required>
                                @if ($errors->has('password'))
                                    <small id="passwordHelp" class="form-text text-muted">
                                        {{ $errors->first('password') }}
                                    </small>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="password-confirm">Confirm Password</label>
                                <div>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </form>
                    @endslot
                @endcomponent
            </div>
        </div>
    </div>
@endsection
