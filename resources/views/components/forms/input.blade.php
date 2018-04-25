<div class="form-group row">
    <label for="{{ snake_case($input_label) }}" 
        class="{{ $input_label_class or 'col-sm-4 col-form-label text-md-right' }}">
        {{ __($input_label) }}
    </label>

    <div class="{{ $input_container_class or 'col-md-6' }}">
        <input 
            type="{{ $type or 'text' }}" 
            class="form-control{{ $errors->has(snake_case($input_label)) ? ' is-invalid' : '' }}" 
            
            @isset($id)
                id="{{ $id }}" 
            @else
                id="{{ snake_case($input_label) }}" 
            @endisset

            @isset($name)
                name="{{ $name }}" 
            @else
                name="{{ snake_case($input_label) }}" 
            @endisset

            value="{{ old(snake_case($input_label)) }}" 
            @isset($required) required @endisset autofocus>

        @if ($errors->has(snake_case($input_label)))
            <span class="invalid-feedback">
                <strong>{{ $errors->first(snake_case($input_label)) }}</strong>
            </span>
        @endif
    </div>
</div>