@component('components.modals.base', [
	'id' => 'user-modal',
	'tooltip' => __('User'),
	'modal_title' => __('User'),
	])
	@slot('modal_body')
		{{ html()->form('POST', '#')->id('user-form')->open() }}
			@method('POST')
			@include('manage.users.partials.forms.create')
		{{ html()->form()->close() }}
	@endslot
	@slot('modal_footer')
		<button class="btn btn-success form-btn">{{ __('Save') }}</button> 
	@endslot
@endcomponent
