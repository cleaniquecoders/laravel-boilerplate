@extends('layouts.app')

@section('body')
	<div class="container">
		<div class="row">
			<div class="col">
				{{ Breadcrumbs::render() }}
				@yield('content')
			</div>
		</div>
	</div><!-- /.container -->
@endsection