@extends('layouts.admin')

@section('content')
<div class="row">
	<div class="col-6 col-sm-4 col-lg-2">
	<div class="card">
		<div class="card-body p-3 text-center">
			<div class="text-right text-green">
			{{ date('Y') }}
			<i class="fe fe-calendar"></i>
			</div>
			<div class="h1 m-0">{{ date('d') }}</div>
			<div class="text-muted mb-4">{{ date('M') }}</div>
		</div>
		</div>
	</div>
</div>
@endsection
