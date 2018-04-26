@component('components.modals.base', [
    'id' => 'edit-user-modal',
    'tooltip' => __('Create New User'),
    'modal_title' => __('Create New User'),
    ])
    @slot('modal_body')
        {{ html()->form('POST', '#')->id('edit-user-form')->open() }}
            @method('PUT')
            @include('manage.users.partials.forms.create')
        {{ html()->form()->close() }}
    @endslot
    @slot('modal_footer')
        <button class="btn btn-success edit-form-btn">{{ __('Update') }}</button> 
    @endslot
@endcomponent
