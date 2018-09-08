@push('scripts')
	<script src="{{ asset('js/select2.js') }}"></script>
	<script type="text/javascript">
		var table_id = '#{{ $table_id }}';
		var primary_key = '{{ $primary_key ?? 'hashslug' }}';
		var routes = @json($routes);
		var columns = @json($columns);
		var forms = @json($forms);
		var disabled = @json($disabled);
		jQuery(document).ready(function($) {
			/* Initialisation */
			$('.select2').select2();

			/* Form Submission */
			$(document).on('click', '.form-btn', function(event) {
				event.preventDefault();
				/* Can be refactor to determine to use post ?? put */
				if($("[name='_method']").val() == 'PUT') {
					var id = $("[name='id']").val();
					axios.put(route(routes.update, id), $('#' + forms.create).serialize())
						.then(response => {
							$(table_id).DataTable().ajax.reload();
							swal('{!! __('User') !!}', response.data.message, 'success');
							$('#' + forms.create)
								.find('input, textarea, select')
								.val('');
							$('#user-modal').modal('hide');
						}).catch(error => console.error(error));
				} else {
					axios.post(route(routes.store), $('#' + forms.create).serialize())
						.then(response => {
							$(table_id).DataTable().ajax.reload();
							swal('{!! __('User') !!}', response.data.message, 'success');
							$('#' + forms.create)
								.find('input, textarea, select')
								.val('');
							$('#user-modal').modal('hide');
						}).catch(error => console.error(error));
				}	
			});

			/* Actions */
			$(document).on('click', '.create-action-btn', function(event) {
				/* Handle Method Spoofing */
				$("[name='_method']").val('POST');
				/* Handle primary key */
				$("[name='id']").val(null);
				/* Enable disabled inputs defined */
				$.each(disabled, function(index, val) {
					 $("[name='" + val + "']").prop('readonly', false);
				});
				$('#user-modal').modal('show');
			});

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
				var id = $(this).data(primary_key);
				axios.get(route(routes.show, id))
					.then(response => {
						/* Handle Method Spoofing */
						$("[name='_method']").val('PUT');
						/* Handle primary key */
						$("[name='id']").val(id);
						/* Disable inputs defined */
						$.each(disabled, function(index, val) {
							 $("[name='" + val + "']").prop('readonly', true);
						});
						var data = response.data.data;
						$.each(columns, function(index, val) {
							if(data[index] != null) {
								if(typeof data[index] == 'object') {
									var values = $.map(data[index], function(elem, idx) {
									    return Number(idx);
									});
									$("[name='" + index + "[]']").val(values);
									if($("[name='" + index + "[]']").hasClass('select2')) {
										$("[name='" + index + "[]']").trigger('change');
									}
								} else {
									$("[name='" + index + "']").val(data[index]);
								}
							}
						});
						$('#user-modal').modal('show');
					})
					.catch(error => console.error(error));
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
							$(table_id).DataTable().ajax.reload();
							swal('{{ __('Delete User') }}', response.data.message, 'success');
						}).catch(error => console.error(error));
				  }
				});
			});
		});
	</script>
@endpush