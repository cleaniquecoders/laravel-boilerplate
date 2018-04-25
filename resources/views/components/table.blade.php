<div class="table-responsive">
	<table 
		class="table {{ $table_classes or 'table-sm table-transparent table-hover' }}" 
		id="{{ $table_id or 'table-id' }}">
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