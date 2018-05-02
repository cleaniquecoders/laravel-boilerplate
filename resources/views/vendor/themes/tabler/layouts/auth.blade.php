@extends('layouts.theme', ['layout' => 'app'])

@section('content')
<div class="page">
  <div class="page-single">
	<div class="container">
	  <div class="row">
		<div class="col col-login mx-auto">
		  <div class="text-center mb-6">
			<p class="h-6">{{ config('app.name') }}</p>
		  </div>
		  
		  {{ $auth_content or '' }}
		</div>
	  </div>
	</div>
  </div>
</div>
@endsection
