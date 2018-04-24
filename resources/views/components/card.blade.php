<div class="card">
	@isset($card_title)
		<div class="card-header {{ $card_title_classes or 'text-dark border-light border bg-light' }}">
			{{ $card_title }}
		</div>
	@endif

	@isset($card_body)
		<div class="card-body {{ $card_body_classes or 'text-dark border-light border bg-white' }}">
			{{ $card_body }}
		</div>
	@endisset

	@if(isset($card_footer))
		<div class="card-footer {{ $card_footer_classes or 'text-dark border-light border bg-light' }}">
			{{ $card_footer }}
		</div>
	@endisset
</div>
