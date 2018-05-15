<div class="form-group row">
    <label for="{{ snake_case($input_label) }}" 
        class="{{ $input_label_class or 'col col-form-label' }}">
        {{ __($input_label) }}
    </label>

    <div class="{{ $input_container_class or 'col' }}">
        {{
            html()->select()
                ->class('select2 form-control ' . ($errors->has(snake_case($input_label)) ? ' is-invalid' : ''))
                ->name((isset($name) ? $name : snake_case($input_label)))
                ->id((isset($id) ? $id : snake_case($input_label)))
                ->options($options)
                ->value(old(snake_case($input_label)))
                ->attribute('autofocus', true)
        }}

        @if ($errors->has(snake_case($input_label)))
            <span class="invalid-feedback">
                <strong>{{ $errors->first(snake_case($input_label)) }}</strong>
            </span>
        @endif
    </div>
</div>