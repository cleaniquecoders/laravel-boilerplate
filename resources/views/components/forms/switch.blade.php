<label class="custom-switch">
        @isset($label_front)<span class="custom-switch-description">{{ $label_front }}&nbsp;</span>@endif
	<input type="checkbox" class="custom-switch-input" id="{{ $id }}" name="{{ $name }}" {{ $checked ? 'checked' : '' }}>
	<span class="custom-switch-indicator"></span>
	<span class="custom-switch-description">{{ $label }}</span>
</label>
