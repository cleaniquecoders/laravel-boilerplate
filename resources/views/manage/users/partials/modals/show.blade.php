@component('components.modals.base', [
    'id' => 'view-user-modal',
    'modal_title' => 'User Details',
    ])
    @slot('modal_body')
        @include('components.table', ['table_id' => 'user-details'])
    @endslot
    @slot('modal_footer')
        <a href="#" id="edit-user-link"
            @include('components.tooltip', ['tooltip' => 'Edit'])
            class="float-right btn btn-primary">
            <i class="fe fe-edit"></i> Edit
        </a>
    @endslot
@endcomponent