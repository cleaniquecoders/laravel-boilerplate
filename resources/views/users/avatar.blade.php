@component('components.panels.small', ['panel_title' => 'Avatar'])
    @slot('panel_body')
        @if(auth()->user()->getFirstMediaUrl('avatar'))

        @endif
		{{ html()->form('POST', route('store.avatar'))->open() }}
			{{ html()->label('Plase choose your avatar') }}
			{{ html()->input('file', 'avatar') }}
		{{ html()->form()->close() }}
    @endslot
@endcomponent
