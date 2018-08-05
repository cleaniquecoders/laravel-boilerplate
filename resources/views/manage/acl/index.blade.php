@extends('layouts.admin')

@push('scripts')
	<script>
		jQuery(document).ready(function($) {

			axios.get(route('api.manage.acl.index'))
				.then(function(response){
					var roles = response.data.data;
					$.each(roles, function(key, role) {
						var permissions = role.permissions;
						$.each(permissions, function(index, permission) {
							if($(permission.name + ":contains('show')")) {
								$('#' + 'acl-' + role.name + '-' + permission.name.replace('show', 'view')).prop('checked', true);
							} else if($(permission.name + ":contains('index')")) {
								$('#' + 'acl-' + role.name + '-' + permission.name.replace('index', 'view')).prop('checked', true);
							} else {
								$('#' + 'acl-' + role.name + '-' + permission.name).prop('checked', true);
							}
						});
					});
				});

			$(document).on('change', '.acl-action-create', function(event) {
				event.preventDefault();
				var data = $(this).data();
				data.revoke = !this.checked;
				axios.put(route('api.manage.acl.update'), data)
					.then(function(response) {
						console.log(response);
					});
			});

			$(document).on('change', '.acl-action-view', function(event) {
				event.preventDefault();
				var data = $(this).data();
				data.revoke = !this.checked;
				axios.put(route('api.manage.acl.update'), data)
					.then(function(response) {
						console.log(response);
					});
			});

			$(document).on('change', '.acl-action-update', function(event) {
				event.preventDefault();
				var data = $(this).data();
				data.revoke = !this.checked;
				axios.put(route('api.manage.acl.update'), data)
					.then(function(response) {
						console.log(response);
					});
			});

			$(document).on('change', '.acl-action-destroy', function(event) {
				event.preventDefault();
				var data = $(this).data();
				data.revoke = !this.checked;
				axios.put(route('api.manage.acl.update'), data)
					.then(function(response) {
						console.log(response);
					});
			});
		});
	</script>
@endpush

@section('content')
	<div class="row justify-content-center">
		<div class="col">
			@component('components.card')
				@slot('card_title')
					Manage Access Control Level
				@endslot
				@slot('card_body')
					@component('components.table', ['table_id' => 'acl-table'])
						@slot('thead')
							<tr>
								<th>Permission / Role</th>
							@foreach(roles() as $role)
								<th>
									{{ title_case(str_replace('_', ' ', $role->name)) }}
								</th>
							@endforeach
							</tr>
						@endslot

						@slot('tbody')
							@foreach(config('acl.permissions') as $permission => $roles)
								<tr>
									<td>{{ title_case(str_replace('_', ' ', $permission)) }}</td>
									@foreach(roles() as $role)
										<td>
											@include('components.forms.checkbox', [
												'name' => 'acl['.$role->name.']['.$permission.'_create]',
												'id' => 'acl-'.$role->name.'-'.$permission.'-create',
												'label' => 'Create',
												'class' => 'acl-action-create',
												'data' => [
													'role' => $role->name,
													'permission' => $permission,
													'type' => 'create',
												],
											])

											@include('components.forms.checkbox', [
												'name' => 'acl['.$role->name.']['.$permission.'_view]',
												'id' => 'acl-'.$role->name.'-'.$permission.'-view',
												'label' => 'View',
												'class' => 'acl-action-view',
												'data' => [
													'role' => $role->name,
													'permission' => $permission,
													'type' => 'view',
												],
											])

											@include('components.forms.checkbox', [
												'name' => 'acl['.$role->name.']['.$permission.'-update]',
												'id' => 'acl-'.$role->name.'-'.$permission.'-update',
												'label' => 'Update',
												'class' => 'acl-action-update',
												'data' => [
													'role' => $role->name,
													'permission' => $permission,
													'type' => 'update',
												],
											])

											@include('components.forms.checkbox', [
												'name' => 'acl['.$role->name.']['.$permission.'_destroy]',
												'id' => 'acl-'.$role->name.'-'.$permission.'-destroy',
												'label' => 'Destroy',
												'class' => 'acl-action-destroy',
												'data' => [
													'role' => $role->name,
													'permission' => $permission,
													'type' => 'destroy',
												],
											])
										</td>
									@endforeach
								</tr>
							@endforeach
						@endslot
					@endcomponent
				@endslot
			@endcomponent
		</div>
	</div>
@endsection