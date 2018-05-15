<div class="dropdown show" >
	<a class="btn btn-sm btn-default dropdown-toggle" href="#" role="button" id="lang-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		<i class="fas fa-language"></i>
	</a>

	<div class="dropdown-menu" aria-labelledby="lang-dropdown">
		@foreach(locales() as $locale)
			<a class="dropdown-item {{ app()->isLocale($locale) ? 'text-primary' : '' }}" 
				href="{{ route('language', $locale) }}">
				{{ __(strtoupper($locale)) }}
			</a>
		@endforeach
	</div>
</div>