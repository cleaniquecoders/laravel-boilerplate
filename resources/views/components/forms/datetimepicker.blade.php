@push('scripts')
	<script>
		jQuery(document).ready(function($) {
            $('#datetimepicker-{{ $id }}').datetimepicker(@isset($config) @json($config) @endisset);
		});
	</script>
@endpush

<div class="form-group row">
    <label for="{{ snake_case($label) }}" 
        class="{{ $label_class ?? 'col col-form-label' }}">
        {{ __($label) }}
    </label>
    <div class="input-group date {{ $input_container_class ?? 'col' }}" id="datetimepicker-{{ $id }}" data-target-input="nearest">
        <input type="text" 
            @isset($readonly)
            readonly="true" 
            @endisset
            class=" datetimepicker-input form-control{{ $errors->has(snake_case($label)) ? ' is-invalid' : '' }} {{ $input_classes ?? '' }}"
            data-target="#datetimepicker-{{ $id }}"
            @isset($required) required @endisset 
            @isset($name)
                name="{{ $name }}" 
            @else
                name="{{ snake_case($label) }}" 
            @endisset
            @isset($id)
                id="{{ $id }}" 
            @else
                id="{{ snake_case($label) }}" 
            @endisset
            @isset($value)
                value="{{ $value }}"
            @endisset
            autofocus/>
        <div class="input-group-append" data-target="#datetimepicker-{{ $id }}" data-toggle="datetimepicker">
            <div class="input-group-text"><i class="fe fe-calendar"></i></div>
        </div>
    </div>
    @if ($errors->has(snake_case($label)))
        <span class="invalid-feedback">
            <strong>{{ $errors->first(snake_case($label)) }}</strong>
        </span>
    @endif
</div>