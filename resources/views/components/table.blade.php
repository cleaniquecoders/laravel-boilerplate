<div class="table-responsive">
	<table 
		class="table {{ $table_classes ?? 'table-sm table-transparent table-hover' }}" 
		id="{{ $table_id ?? 'table-id' }}">
		@isset($thead)
			<thead>
				{{ $thead ?? '' }}
			</thead>
		@endisset

		@isset($thead)
			<tbody>
				{{ $tbody ?? '' }}
			</tbody>
		@endisset

		@isset($thead)
			<tfoot>
				{{ $tfoot ?? '' }}
			</tfoot>
		@endisset
	</table>
</div>