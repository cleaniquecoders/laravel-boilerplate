@extends('layouts.app')

@section('content')
<div class="page">
  <div class="page-single">
	<div class="container">
	  <div class="row">
		<div class="col col-login mx-auto">
		  <div class="text-center mb-6">
			<p class="h-6">
				@include('components.logo', ['height' => '64px'])
			</p>
			<br>
			<small>{{ config('app.name') }}</small>
		  </div>
		  {{ $auth_content or '' }}
		</div>
	  </div>
	</div>
  </div>
</div>
@endsection
