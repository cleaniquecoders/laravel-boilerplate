@component('layouts.theme', ['layout' => 'blank'])
	@slot('blank_content')
		@include('vendor.themes.tabler.components.page.header', ['page_title' => __('Dashboard')])
		<div class="row row-cards">
			<div class="col-6 col-sm-4 col-lg-2">
				<div class="card">
				  <div class="card-body p-3 text-center">
					<div class="text-right text-green">
					  {{ date('Y') }}
					  <i class="fe fe-calendar"></i>
					</div>
					<div class="h1 m-0">{{ date('d') }}</div>
					<div class="text-muted mb-4">{{ date('M') }}</div>
				  </div>
				</div>
			</div>
		</div>
	@endslot
@endcomponent