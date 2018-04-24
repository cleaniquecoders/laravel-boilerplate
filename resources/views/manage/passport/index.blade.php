@extends('layouts.admin')

@push('scripts')
	<script src="{{ asset('js/passport.js') }}"></script>
@endpush

@section('content')
	<div id="passport">
		<div class="row">
			<div class="col">
				<passport-clients></passport-clients>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col">
				<passport-personal-access-tokens></passport-personal-access-tokens>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col">
				<passport-authorized-clients></passport-authorized-clients>
			</div>
		</div>
	</div>
@endsection