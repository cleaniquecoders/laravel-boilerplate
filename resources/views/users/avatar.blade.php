@component('components.panels.small', ['panel_title' => 'Avatar'])
    @slot('panel_body')
		{{ html()->form('POST', route('store.avatar'))->attribute('enctype', 'multipart/form-data')->open() }}
			{{ html()->label('Please choose your avatar') }}
			{{ html()->input('file')->name('avatar') }}
			{{ html()->button('Submit', 'submit')->class('btn btn-sm btn-default') }}
		{{ html()->form()->close() }}
    @endslot
@endcomponent
