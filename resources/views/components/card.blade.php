<div class="card border-0">
	@isset($card_title)
		<div class="card-header {{ $card_title_classes ?? 'font-weight-bold text-dark bg-white border-0' }}">
			<div class="container">
				<div class="row">
					<div class="col">
						{{ $card_title }}
					</div>
				</div>
			</div>
			<hr>
		</div>
	@endisset

	@isset($card_body)
		<div class="card-body {{ $card_body_classes ?? 'text-dark bg-white border-0' }}">
			{{ $card_body }}
		</div>
	@endisset

	@if(isset($card_footer))
		<div class="card-footer {{ $card_footer_classes ?? 'text-dark bg-white border-0' }}">
			{{ $card_footer }}
		</div>
	@endisset
</div>
