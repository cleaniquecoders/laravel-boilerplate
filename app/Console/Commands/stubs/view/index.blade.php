@extends('layouts.admin')

@section('content')
	<div class="row justify-content-center">
		<div class="col">
			@component('components.card')
				@slot('card_title')
					<a href="#" class="btn btn-success float-right">
						@icon('fe fe-plus') {{ __('New Record') }}
					</a>
				@endslot
				@slot('card_body')
					@component('components.datatable', 
						[
							'table_id' => 'dummyTableId',
							'route_name' => 'api.datatable.dummyDatatableRoute',
							'columns' => [
								['data' => 'name', 'title' => __('table.name'), 'defaultContent' => '-'],
								['data' => null , 'name' => null, 'searchable' => false],
							],
							'headers' => [
								__('table.name'), __('table.action')
							],
							'actions' => minify(view('components.actions')->render())
						]
					)
					@endcomponent
				@endslot
			@endcomponent
		</div>
	</div>
@endsection