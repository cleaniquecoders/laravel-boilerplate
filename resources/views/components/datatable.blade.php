@push('styles')
	<link rel="stylesheet" href="{{ asset('css/datatable.css') }}">
@endpush

@push('scripts')
	<script type="text/javascript" src="{{ asset('js/datatable.js') }}"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			var datatable_{{ str_slug($table_id, '_') }} = $('#{{ $table_id }}').DataTable({
				@isset($lang)
				language: {
					url: '{{ asset($lang) }}'
				},
				@endisset
				processing: true,
				serverSide: true,
				responsive: true,
				deferRender: false,
				ajax: {
					url:'{!! route($route_name, $param ?? null) !!}',
					beforeSend: function (request) {
				        request.setRequestHeader("Accept", '{{ config('api.header.accept') }}');
				        request.setRequestHeader("Version", '{{ config('api.version') }}');
				        request.setRequestHeader("X-CSRF-TOKEN", '{{ csrf_token() }}');
				    },
					{{ $datatable_data ?? ''}}
				},
				columns: @json($columns),
				columnDefs: [
					@isset($actions)
					{
						"render": function ( data, type, row, meta ) {
							return '{!! $actions !!}';
						},
						"targets": -1
					},
					@endisset
					@isset($columnDefs)
						{!! $columnDefs !!}
					@endisset
				]
			});
			{{ $datatable_handler ?? ''}}
		});
	</script>
@endpush

@component('components.table', ['table_id' => $table_id])
	@isset($headers)
		@slot('thead')
			@foreach($headers as $header)
				<th>{{ $header }}</th>
			@endforeach
		@endslot
	@endisset
	
	@isset($footers)
		@slot('tfoot')
			@foreach($footers as $footer)
				<th>{{ $footer }}</th>
			@endforeach
		@endslot
	@endisset
@endcomponent
