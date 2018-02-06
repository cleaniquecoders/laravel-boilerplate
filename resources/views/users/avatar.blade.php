@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-md-center mt-5">
            <div class="col-xs-12 col-sm-8 col-md-6 col-lg-4 col-xl-4">
                @component('components.card', ['card_title' => 'Avatar'])
                    @slot('card_body')
                        {{ html()->form('POST', route('store.avatar'))->attribute('enctype', 'multipart/form-data')->open() }}
							{{ html()->label('Please choose your avatar') }}
							{{ html()->input('file')->name('avatar') }}
							{{ html()->button('Submit', 'submit')->class('btn btn-sm btn-default') }}
						{{ html()->form()->close() }}
                    @endslot
                @endcomponent
            </div>
        </div>
    </div>
@endsection
