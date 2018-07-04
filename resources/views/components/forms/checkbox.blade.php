<label class="custom-control custom-checkbox">
	<input type="checkbox" class="custom-control-input {{ $class or '' }}" 
		@isset($id)
            id="{{ $id }}" 
        @else
            id="{{ snake_case($label) }}" 
        @endisset

        @isset($name)
            name="{{ $name }}" 
        @else
            name="{{ snake_case($label) }}" 
        @endisset

		value="{{ $value or 1 }}"

		@isset($data) 
			@foreach($data as $key => $value) data-{{ $key }}="{{ $value }}" @endforeach
		@endisset
		{{ isset($checked) ? 'checked' : '' }}>
	<span class="custom-control-label">{{ __($label) }}</span>
</label>