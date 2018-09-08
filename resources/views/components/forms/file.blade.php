<div class="form-group row">
    <label for="{{ snake_case($label) }}" 
        class="{{ $label_class ?? 'col col-form-label' }}">
        {{ __($label) }}
    </label>

    <div class="{{ $input_container_class ?? 'col-md-12' }}">
        <input 
            @isset($readonly)
            readonly="true" 
            @endisset
            type="{{ $type ?? 'file' }}" 
            placeholder="@isset($placeholder) {{ __($placeholder) }} @else {{ __($label) }} @endisset" 
            class="form-control{{ $errors->has(snake_case($label)) ? ' is-invalid' : '' }} {{ $input_classes ?? '' }}" 
            
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

            value="{{ old(snake_case($label)) }}" 
            
            @isset($accept)
                accept="{{ $accept }}"
            @endisset
            
            @isset($required) required @endisset autofocus>

            @isset($multiple)
                <div class="btn btn-danger btn-sm float-right" onclick="$(this).parent().parent().remove()">{{ __('Batal') }}</div>
            @endisset

        @if ($errors->has(snake_case($label)))
            <span class="invalid-feedback">
                <strong>{{ $errors->first(snake_case($label)) }}</strong>
            </span>
        @endif
    </div>
</div>