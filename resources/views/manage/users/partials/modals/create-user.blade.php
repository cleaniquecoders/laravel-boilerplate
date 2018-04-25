@push('scripts')
    <script>
        function createUser()
        {
            axios.post(route('api.users.store'), $('#create-user-form').serialize())
                .then(response => {
                    swal('{!! __('New User') !!}', '{!! __('New user sucesssfully created.') !!}', 'success');
                    $('#create-user-form')
                        .find('input[type=text], input[type=password], input[type=email], textarea')
                        .val('');
                }).catch(error);
        }
    </script>
@endpush

@component('components.modal', [
    'id' => 'create-user-modal',
    'tooltip' => __('Create New User'),
    'icon' => 'fas fa-plus',
    'modal_title' => __('Create New User'),
    ])
    @slot('modal_body')
        {{ html()->form('POST', '#')
            ->id('create-user-form')
            ->open() }}
            @include('manage.users.forms.create-user')
        {{ html()->form()->close() }}
    @endslot
    @slot('modal_footer')
        <button id="button_create_user" class="btn btn-success" 
            onclick="createUser();">{{ __('Create User') }}</button> 
    @endslot
@endcomponent
