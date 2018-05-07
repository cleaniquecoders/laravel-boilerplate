@extends('layouts.admin')

@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-4">
            @component('components.card', ['card_title' => __('Upload Avatar')])
                @slot('card_body')
                    {{ html()->form('POST', route('user.avatar.store'))->attribute('enctype', 'multipart/form-data')->open() }}
                        <div class="form-group">
    						{{ html()->label(__('Please choose your avatar')) }}
    						{{ html()->input('file')->name('avatar')->class('form-control') }}
                        </div>
                        <hr>
                        <div class="btn-group float-right">
                            {{ html()->a(route('user.show'), __('Cancel'))->class('btn btn-outline-danger') }}
                            {{ html()->button(__('Submit'), 'submit')->class('btn btn-outline-success') }}    
                        </div>
					{{ html()->form()->close() }}
                @endslot
            @endcomponent
        </div>
    </div>
@endsection
