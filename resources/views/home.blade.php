@extends('layouts.admin')

@section('content')
<div class="row">
	<div class="col-6 col-sm-4 col-lg-2">
		@include('components.cards.figure', [
				'header' => date('Y'),
				'icon' => 'fe fe-calendar',
				'content' => date('d'),
				'footer' => date('M')
			])
	</div>
</div>
@endsection
