@component('components.modals.base', [
	'id' => 'user-modal',
	'tooltip' => __('User'),
	'modal_title' => __('User'),
	])
	@slot('modal_body')
		<div class="row">
			<div class="col-md-3 col-lg-3 col-xl-3">
		      
		    </div>
		    <div class="col-md-6 col-lg-6 col-xl-6">
		      	{{ html()->form('POST', '#')->id('user-form')->open() }}
					@method('POST')
					@include('manage.users.partials.forms.create')
				{{ html()->form()->close() }}
		    </div>
		    <div class="col-md-3 col-lg-3 col-xl-3">
		      
		    </div>
		</div>
	@endslot
	@slot('modal_footer')
		<button class="btn btn-success form-btn">{{ __('Save') }}</button> 
	@endslot
@endcomponent
