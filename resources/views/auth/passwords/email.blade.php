@component('layouts.auth')
	@slot('auth_content')
		<form class="card" method="POST" action="{{ route('password.email') }}">
			@csrf
			<div class="card-body p-6">
				<div class="card-title text-center">Forgot Password</div>
				<hr>
				@if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
				<div class="form-group">
					<label for="email" class="form-label">E-Mail Address</label>

					<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

					@if ($errors->has('email'))
						<span class="invalid-feedback">
							<strong>{{ $errors->first('email') }}</strong>
						</span>
					@endif
				</div>

				<div class="form-footer">
					<button type="submit" class="btn btn-primary btn-block">Send Password Reset Link</button>
				</div>
			</div>
		</form>
	@endslot
@endcomponent
