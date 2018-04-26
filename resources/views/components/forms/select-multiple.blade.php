<div class="form-group row">
    <label for="{{ snake_case($input_label) }}" 
        class="{{ $input_label_class or 'col-sm-4 col-form-label text-md-right' }}">
        {{ __($input_label) }}
    </label>

    <div class="{{ $input_container_class or 'col-md-6' }}">
        {{
            html()->select()
                ->class('select2 w-100 form-control ' . ($errors->has(snake_case($input_label)) ? ' is-invalid' : ''))
                ->name(snake_case($input_label) . '[]')
                ->id(snake_case($input_label) . '[]')
                ->options($options)
                ->value(old(snake_case($input_label)))
                ->attribute('autofocus', true)
                ->attribute('multiple', true)
                ->attribute('style', 'width:100%')
        }}

        @if ($errors->has(snake_case($input_label)))
            <span class="invalid-feedback">
                <strong>{{ $errors->first(snake_case($input_label)) }}</strong>
            </span>
        @endif
    </div>
</div>