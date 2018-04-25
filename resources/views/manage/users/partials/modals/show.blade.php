@component('components.modals.base', [
    'id' => 'view-user-modal',
    'modal_title' => 'User Details',
    ])
    @slot('modal_body')
        <div class="table-responsive">
            {{-- 
                @todo Either dynamically create the table content, or have custom content for each of the fields 
            --}}
            <table class="table table-sm table-transparent table-hover" id="view-user-details"></table>
        </div>
    @endslot
    @slot('modal_footer')
        <a href="#" id="edit-user-link"
            @include('components.tooltip', ['tooltip' => 'Edit'])
            class="float-right btn btn-primary">
            <i class="fas fa-edit"></i> Edit
        </a>
    @endslot
@endcomponent