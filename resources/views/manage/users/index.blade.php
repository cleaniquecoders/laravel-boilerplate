@extends('layouts.admin')

@push('scripts')
	@include('manage.users.partials.scripts')
@endpush

@section('content')
	@include('manage.users.partials.modals.show')
	<div class="row justify-content-center">
		<div class="col">
			@component('components.card', ['card_title' => 'User Management'])
				@slot('card_body')
					@component('components.datatable', 
						[
							'table_id' => 'user-management-datatable',
							'route_name' => 'api.datatable.manage.user',
							'columns' => [
								['data' => 'name', 'title' => 'Name', 'defaultContent' => '-'],
								['data' => 'email', 'title' => 'E-mail', 'defaultContent' => '-'],
								['data' => null , 'name' => null, 'searchable' => false],
							],
							'headers' => [
								'Name', 'E-mail', 'Action'
							]
						]
					)
					@slot('actions')
						"render": function ( data, type, row, meta ) {
							var params = {user : data.id};
							var url = route('api.manage.users.show', params);
							var edit = route('manage.users.edit', params);
							var del = route('api.manage.users.destroy', params);

							return '<div class="btn btn-group">' +
								'<div class="btn btn-sm btn-default border-primary"' +
									'data-balloon="Details" data-balloon-pos="up"' +
									'onclick="getData(\''+ url +'\')">' +
									'<i class="fas fa-eye"></i>' +
								'</div>' +
								'<a class="btn btn-sm btn-primary"' +
									'data-balloon="Edit" data-balloon-pos="up"' +
									'href="' + edit + '">' +
									'<i class="fas fa-edit"></i>' +
								'</a>' +
								'<div class="btn btn-sm btn-danger"' +
									'data-balloon="Delete" data-balloon-pos="up"' +
									'onclick="deleteRecord(\'' + del + '\',\'' + data.id + '\')">' +
									'<i class="fas fa-trash"></i>' +
								'</div>' +
								'<input style="display:hidden;" type="hidden" id="delete-id' + data.id + '" value="' + data.id + '">' +
							'</div>';
						},
					@endslot

					@endcomponent
				@endslot
			@endcomponent
		</div>
	</div>
@endsection