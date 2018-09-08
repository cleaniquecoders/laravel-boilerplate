@component('layouts.auth')
    @slot('auth_content')
        <form class="card" method="POST" action="{{ route('password.request') }}">
            @csrf
            <div class="card-body p-6">
                <div class="card-title text-center">Reset Password</div>
                <hr>
                <input type="hidden" name="token" value="{{ $token }}">
                
                <div class="form-group">
                    <label for="email" class="form-label">E-Mail Address</label>

                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">Password</label>

                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="password-confirm" class="form-label">Confirm Password</label>
                    
                    <input id="password-confirm" type="password" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" name="password_confirmation" required>

                    @if ($errors->has('password_confirmation'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-footer">
                    <button type="submit" class="btn btn-primary btn-block">Reset Password</button>
                </div>
            </div>
        </form>
    @endslot
@endcomponent
