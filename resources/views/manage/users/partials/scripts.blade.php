@push('scripts')
	<script type="text/javascript">
		var table_id = '#table-{{ str_slug($table_id, '_') }}';
		var primary_key = '{{ $primary_key or 'hashslug' }}';
		var routes = @json($routes);
		var columns = @json($columns);
		jQuery(document).ready(function($) {
			$(document).on('click', '.show-action-btn', function(event) {
				event.preventDefault();
				var id = $(this).data(primary_key);
				axios.get(route(routes.show, id))
					.then(response => {
						var data = response.data.data;
						var content = '';
						$.each(columns, function(index, val) {
							var label = '-';
                            if(data[index] != null) {
                                label = data[index];
                                content += '<tr><td class="font-weight-bold text-right">'+val+'</td><td>'+label+'</td></tr>';
                            }
						});
						$('#user-details').html(content);
						$('#view-user-modal').modal('show');
					})
					.catch(error => console.error(error));
				
			});
			$(document).on('click', '.edit-action-btn', function(event) {
				event.preventDefault();
				var id = $(this).data(primary_key);
			});
			$(document).on('click', '.destroy-action-btn', function(event) {
				event.preventDefault();
				var id = $(this).data(primary_key);

				swal({
				  title: '{!! __('Warning') !!}',
				  text: '{!! __('Are you sure want to delete this record?') !!}',
				  type: 'warning',
				  showCancelButton: true,
				  confirmButtonText: '{!! __('Yes') !!}',
				  cancelButtonText: '{!! __('Cancel') !!}'
				}).then((result) => {
				  if (result.value) {
					axios.delete(route(routes.destroy, id), {'_method' : 'DELETE'})
						.then(response => {
							if(! response.data.data.status) {
								swal('Delete', response.data.data.message, 'error');
							} else {
								swal('Delete', response.data.data.message, 'success');
								$('#' + table_id).DataTable().ajax.reload();
							}
						}).catch(error => console.error(error));
				  }
				});
			});
		});
		function create()
	    {
	        axios.post(route('api.users.store'), $('#create-user-form').serialize())
	            .then(response => {
	                swal('{!! __('New User') !!}', '{!! __('New user sucesssfully created.') !!}', 'success');
	                $('#create-user-form')
	                    .find('input[type=text], input[type=password], input[type=email], textarea')
	                    .val('');
	            }).catch(error);
	    }
	</script>
@endpush