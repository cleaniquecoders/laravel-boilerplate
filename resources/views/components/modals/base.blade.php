<div class="modal fade" id="{{ $id }}" role="dialog" aria-labelledby="{{ $id }}ModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="{{ $id }}ModalLongTitle">{{ __($modal_title) }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="{{ __('Close') }}">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {{ $modal_body }}
      </div>

      @isset($modal_footer)
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Close') }}</button>
          {{ $modal_footer }}
        </div>
      @endisset

    </div>
  </div>
</div>
