@extends('layouts.theme', ['layout' => 'app'])

@section('content')
	<div class="my-3 my-md-5">
		<div class="container">
			{{ $blank_content or ''}}
		</div>
	</div>
@endsection
