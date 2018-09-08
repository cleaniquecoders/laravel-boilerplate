<div class="form-group row">
    <label for="{{ snake_case($label) }}" 
        class="{{ $label_class ?? 'col col-form-label' }}">
        {{ __($label) }}
    </label>

    <div class="{{ $input_container_class ?? 'col' }}">
        <input 
            @isset($readonly)
            readonly="true" 
            @endisset
            type="{{ $type ?? 'text' }}" 
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
            
            @isset($onkeyup)
                onkeyup="{{$onkeyup}}"
            @endisset
            
            @isset($step)
                step="{{$step}}"
            @endisset

            @isset($value)
                value="{{$value}}"
            @endisset

            @isset($readonly)
                readonly="{{$readonly}}"
            @endisset
            
            value="{{ old(snake_case($label)) }}" 
            @isset($required) required @endisset autofocus>

        @if ($errors->has(snake_case($label)))
            <span class="invalid-feedback">
                <strong>{{ $errors->first(snake_case($label)) }}</strong>
            </span>
        @endif
    </div>
</div>