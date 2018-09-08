<div class="form-group row">
    <label for="{{ snake_case($label) }}" 
        class="{{ $label_class ?? 'col col-form-label' }}">
        {{ __($label) }}
    </label>
    <div class="{{ $input_container_class ?? 'col' }}">
        {{
            html()->select()
                ->class('select2 w-100 form-control ' . ($errors->has(snake_case($label)) ? ' is-invalid' : ''))
                ->name((isset($name) ? $name : snake_case($label)) . '[]')
                ->id((isset($id) ? $id : snake_case($label)))
                ->options($options)
                ->value(old(snake_case($label)))
                ->attribute('autofocus', true)
                ->attribute('multiple', 'multiple')
                ->attribute('style', 'width:100%')
        }}

        @if ($errors->has(snake_case($label)))
            <span class="invalid-feedback">
                <strong>{{ $errors->first(snake_case($label)) }}</strong>
            </span>
        @endif
    </div>
</div>