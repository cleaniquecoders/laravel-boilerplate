<div class="tab-pane fade {{ $active }}" id="{{ $id }}" role="tabpanel">
	@component('components.card', ['card_title' => $title])
		@slot('card_body')
			{!! $content !!}
		@endslot
	@endcomponent
</div>
