@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-md-center mt-5">
            <div class="col-xs-12 col-sm-8 col-md-6 col-lg-4 col-xl-4">
                @component('components.card', ['card_title' => 'Avatar'])
                    @slot('card_body')
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}">
                            {{ csrf_field() }}

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
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </form>
                    @endslot
                @endcomponent
            </div>
        </div>
    </div>
@endsection
