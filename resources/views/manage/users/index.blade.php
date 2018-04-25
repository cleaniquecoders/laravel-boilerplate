@extends('layouts.admin')

@section('content')
	@include('manage.users.partials.scripts', [
		'table_id' => 'user-management-datatable',
		'primary_key' => 'hashslug',
		'routes' => [
			'show' => 'api.manage.users.show',
			'update' => 'api.manage.users.update',
			'destroy' => 'api.manage.users.destroy',
		],
		'columns' => [
			'name' => __('table.name'), 
			'email' => __('table.email'), 
			'created_at' => __('table.created_at'),
			'updated_at' => __('table.updated_at')
		]
	])
	@include('manage.users.partials.modals.create')
	@include('manage.users.partials.modals.show')
	<div class="row justify-content-center">
		<div class="col">
			@component('components.card')
				@slot('card_title')
					<h4>
						{{ __('User Management') }}
						<div class="float-right">
							@include('components.modals.button', [
								'id' => 'create-user-modal',
								'label' => __('New User'),
								'icon' => 'fa fa-plus'
							])
						</div>
					</h4>
				@endslot
				@slot('card_body')
					@component('components.datatable', 
						[
							'table_id' => 'user-management',
							'route_name' => 'api.datatable.manage.user',
							'columns' => [
								['data' => 'name', 'title' => __('table.name'), 'defaultContent' => '-'],
								['data' => 'email', 'title' => __('table.email'), 'defaultContent' => '-'],
								['data' => null , 'name' => null, 'searchable' => false],
							],
							'headers' => [
								__('table.name'), __('table.email'), __('table.action')
							]
						]
					)
						@slot('actions')
							"render": function ( data, type, row, meta ) {
								return '{!! minify(view('components.actions')->render()) !!}';
							},
						@endslot

					@endcomponent
				@endslot
			@endcomponent
		</div>
	</div>
@endsection