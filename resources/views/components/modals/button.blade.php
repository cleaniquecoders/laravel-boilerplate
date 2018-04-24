<button type="button" class="btn btn-sm btn-primary" @include('components.tooltip', ['tooltip' => $tooltip])
  data-toggle="modal" data-target="#{{ $id }}">
  <i class="{{ $icon }}"></i>
</button>