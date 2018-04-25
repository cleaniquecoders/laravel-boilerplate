<div class="btn btn-group">
	<div class="btn btn-sm btn-default border-primary details-action-btn"
		data-balloon="{{ __('Details') }}" data-balloon-pos="up"
		onclick="getData()">
		<i class="fas fa-eye"></i>
	</div>
	<a class="btn btn-sm btn-primary edit-action-btn"
		data-balloon="{{ __('Edit') }}" data-balloon-pos="up"
		href=" edit ">
		<i class="fas fa-edit"></i>
	</a>
	<div class="btn btn-sm btn-danger destroy-action-btn"
		data-balloon="{{ __('Delete') }}" data-balloon-pos="up"
		onclick="deleteRecord()">
		<i class="fas fa-trash"></i>
	</div>
</div>