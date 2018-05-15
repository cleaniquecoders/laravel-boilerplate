@extends('layouts.admin')

@section('content')
	@include('manage.users.partials.styles')
	@include('manage.users.partials.scripts', [
		'table_id' => 'user-management',
		'primary_key' => 'hashslug',
		'routes' => [
			'show' => 'api.manage.users.show',
			'store' => 'api.manage.users.store',
			'update' => 'api.manage.users.update',
			'destroy' => 'api.manage.users.destroy',
		],
		'columns' => [
			'name' => __('table.name'), 
			'email' => __('table.email'), 
			'roles_to_string' => __('table.role'), 
			'roles' => __('table.role'), 
			'created_at' => __('table.created_at'),
			'updated_at' => __('table.updated_at')
		],
		'forms' => [
			'create' => 'user-form',
			'edit' => 'user-form',
		], 
		'disabled' => [
			'email'
		]
	])
	@include('manage.users.partials.modals.form')
	@include('manage.users.partials.modals.show')
	<div class="row justify-content-center">
		<div class="col">
			@component('components.card')
				@slot('card_title')
					@include('components.modals.button', [
						'modal_btn_classes' => 'create-action-btn float-right',
						'label' => __('New User'),
						'icon' => 'fe fe-plus'
					])
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