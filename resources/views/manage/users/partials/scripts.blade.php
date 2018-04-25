<script type="text/javascript">
	function getData(url)
	{
		axios.get(url)
			.then(response => {
				var data = response.data.data;
				$('#edit-user-link').attr('href', route('manage.users.edit', {user : data.id}));
				$('#view-user-details').html('');
				var content = '';
				// map columns defined to be use, so we can generate table content dynamically.
				
				$('#view-user-details').html(content);
				$('#delete-user-id').val(data.id);
				$('#view-user-modal').modal('show');
			})
			.catch(error => console.log(error));
	}

	function deleteRecord(url, id)
	{
		swal({
		  title: '{!! __('Warning') !!}',
		  text: '{!! __('Are you sure want to delete this record?') !!}',
		  type: 'warning',
		  showCancelButton: true,
		  confirmButtonText: '{!! __('Yes') !!}',
		  cancelButtonText: '{!! __('Cancel') !!}'
		}).then((result) => {
		  if (result.value) {
			var id = $('#delete-id' + id).val();
			axios.delete(url, {'_method' : 'DELETE'})
				.then(response => {
					$('#user-datatable').DataTable().ajax.reload();
				}).catch(error)
		  }
		});
	}
</script>