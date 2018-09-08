@extends('layouts.app')

@section('content')
<div class="page">
  <div class="page-single">
	<div class="container">
	  <div class="row">
		<div class="col col-login mx-auto">
		  {{ $auth_content ?? '' }}
		</div>
	  </div>
	</div>
  </div>
</div>
@endsection
