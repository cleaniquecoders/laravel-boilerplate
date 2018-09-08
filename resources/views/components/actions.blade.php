<div class="text-center btn-group">
	{{ $prepend_action ?? '' }}
    <a class="btn btn-default btn-sm show-action-btn"
    	data-balloon="{{ __('Detail') }}" data-balloon-pos="up"
		data-{{ $primary_key ?? 'hashslug' }}="' + data.{{ $primary_key ?? 'hashslug' }} + '">
		<i class="fe fe-eye"></i>
	</a>
	<a class="btn btn-default btn-sm edit-action-btn"
		data-balloon="{{ __('Update') }}" data-balloon-pos="up"
		data-{{ $primary_key ?? 'hashslug' }}="' + data.{{ $primary_key ?? 'hashslug' }} + '">
		<i class="fe fe-edit text-primary"></i>
	</a>
    <a class="btn btn-default btn-sm destroy-action-btn" 
    	data-balloon="{{ __('Delete') }}" data-balloon-pos="up"
		data-{{ $primary_key ?? 'hashslug' }}="' + data.{{ $primary_key ?? 'hashslug' }} + '">
		<i class="fe fe-trash text-danger"></i>
	</a>
	{{ $append_action ?? '' }}
</div>