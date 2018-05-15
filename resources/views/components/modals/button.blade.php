<div class="btn btn-primary {{ $modal_btn_classes or '' }}" 
	@include('components.tooltip', ['tooltip' => __($label)])
  @isset($id) data-toggle="modal" data-target="#{{ $id }}" @endisset>
  @isset($icon) <i class="{{ $icon }}"></i> @endisset
  @isset($label) {{ __($label) }} @endisset
</div>