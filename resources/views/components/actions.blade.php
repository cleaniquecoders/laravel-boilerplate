<div class="btn btn-group">
	{{ $prepend_action or '' }}

	<div class="btn btn-sm btn-default border-primary show-action-btn"
		data-balloon="{{ __('Details') }}" data-balloon-pos="up" 
		data-{{ $primary_key or 'hashslug' }}="' + data.{{ $primary_key or 'hashslug' }} + '">
		<i class="fas fa-eye"></i>
	</div>
	<a class="btn btn-sm btn-primary edit-action-btn"
		data-balloon="{{ __('Edit') }}" data-balloon-pos="up"
		data-{{ $primary_key or 'hashslug' }}="' + data.{{ $primary_key or 'hashslug' }} + '">
		<i class="fas fa-edit text-light"></i>
	</a>
	<div class="btn btn-sm btn-danger destroy-action-btn"
		data-balloon="{{ __('Delete') }}" data-balloon-pos="up"
		data-{{ $primary_key or 'hashslug' }}="' + data.{{ $primary_key or 'hashslug' }} + '">
		<i class="fas fa-trash"></i>
	</div>

	{{ $append_action or '' }}
</div>