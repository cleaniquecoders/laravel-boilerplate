@extends('layouts.admin')

@push('scripts')
	<script src="{{ asset('js/vue.js') }}"></script>
@endpush

@section('content')
	<div class="row justify-content-center" id="passport">
		<div class="col">
			<passport-clients></passport-clients>
			<passport-authorized-clients></passport-authorized-clients>
			<passport-personal-access-tokens></passport-personal-access-tokens>
		</div>
	</div>
@endsection