@component('layouts.auth')
	@slot('auth_content')
		<form class="card" method="POST" action="{{ route('register') }}">
			@csrf
			<div class="card-body p-6">
				<div class="card-title text-center">Register</div>
				<hr>
				<div class="form-group">
					<label for="name" class="form-label">Name</label>

					<input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

					@if ($errors->has('name'))
						<span class="invalid-feedback">
							<strong>{{ $errors->first('name') }}</strong>
						</span>
					@endif                    
				</div>

				<div class="form-group">
					<label for="email" class="form-label">E-Mail Address</label>

					<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

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

					<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
				</div>

				<div class="form-footer">
					<button type="submit" class="btn btn-primary btn-block">Register</button>
				</div>

			</div>
		</form>
		<div class="text-center text-muted">
			Already have an account? <a href="{{ route('login') }}">Sign in</a>
		</div>
	@endslot
@endcomponent
