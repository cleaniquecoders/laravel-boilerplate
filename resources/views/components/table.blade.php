<div class="table-responsive">
	<table class="table {{ $table_classes or 'table-sm table-transparent table-hover' }}" id="{{ $table_id or 'table-id' }}">
		<thead>
			{{ $thead ?? '' }}
		</thead>
		<tbody>
			{{ $tbody ?? '' }}
		</tbody>
		<tfoot>
			{{ $tfoot ?? '' }}
		</tfoot>
	</table>
</div>