@extends('layouts.admin')

@push('scripts')
	<script>
		jQuery(document).ready(function($) {
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
							@foreach(config('acl.roles') as $role)
								<th>
									{{ title_case($role) }}
								</th>
							@endforeach
							</tr>
						@endslot

						@slot('tbody')
							@foreach(config('acl.permissions') as $permission => $roles)
								<tr>
									<td>{{ title_case($permission) }}</td>
									@foreach(config('acl.roles') as $role)
										<td>
											@include('components.forms.checkbox', [
												'name' => 'acl['.$role.']['.$permission.'_create]',
												'id' => 'acl-'.$role.'-'.$permission.'-create',
												'label' => 'Create',
												'class' => 'acl-action-create',
												'data' => [
													'role' => $role,
													'permission' => $permission,
													'type' => 'create',
												],
												'checked' => role($role)->hasPermissionTo($permission.'_create') ? true : false,
											])

											@include('components.forms.checkbox', [
												'name' => 'acl['.$role.']['.$permission.'_view]',
												'id' => 'acl-'.$role.'-'.$permission.'-view',
												'label' => 'View',
												'class' => 'acl-action-view',
												'data' => [
													'role' => $role,
													'permission' => $permission,
													'type' => 'view',
												],
												'checked' => role($role)->hasPermissionTo($permission.'_index') ? true : false,
											])

											@include('components.forms.checkbox', [
												'name' => 'acl['.$role.']['.$permission.'_update]',
												'id' => 'acl-'.$role.'-'.$permission.'-update',
												'label' => 'Update',
												'class' => 'acl-action-update',
												'data' => [
													'role' => $role,
													'permission' => $permission,
													'type' => 'update',
												],
												'checked' => role($role)->hasPermissionTo($permission.'_update') ? true : false,
											])

											@include('components.forms.checkbox', [
												'name' => 'acl['.$role.']['.$permission.'_destroy]',
												'id' => 'acl-'.$role.'-'.$permission.'-destroy',
												'label' => 'Destroy',
												'class' => 'acl-action-destroy',
												'data' => [
													'role' => $role,
													'permission' => $permission,
													'type' => 'destroy',
												],
												'checked' => role($role)->hasPermissionTo($permission.'_destroy') ? true : false,
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