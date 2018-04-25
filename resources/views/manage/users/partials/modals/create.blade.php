@component('components.modals.base', [
    'id' => 'create-user-modal',
    'tooltip' => __('Create New User'),
    'modal_title' => __('Create New User'),
    ])
    @slot('modal_body')
        @include('manage.users.partials.forms.create')
    @endslot
    @slot('modal_footer')
        <button class="btn btn-success create-action-btn">{{ __('Create User') }}</button> 
    @endslot
@endcomponent
