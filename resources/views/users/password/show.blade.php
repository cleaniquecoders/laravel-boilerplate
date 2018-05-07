@extends('layouts.admin')

@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-4">
            @component('components.card', ['card_title' => __('Password')])
                @slot('card_body')
					{{ html()->form('PUT', route('user.password.update'))->open() }}
						
						<div class="form-group">
							{{ html()->label(__('Password'))->attribute('for', 'password') }}
							{{ html()->password()->name('password')->class('form-control') }}
						</div>
					
						<div class="form-group">
							{{ html()->label(__('Password Confirmation'))
								->attribute('for', 'password_confirmation') }}
							{{ html()->password()->name('password_confirmation')->class('form-control') }}
						</div>
							
						<div class="btn-group float-right">
                            {{ html()->a(route('user.show'), __('Cancel'))->class('btn btn-outline-danger') }}
                            {{ html()->button(__('Update'), 'submit')->class('btn btn-outline-primary') }}    
                        </div>
                        
					{{ html()->form()->close() }}
				@endslot
            @endcomponent
        </div>
    </div>
@endsection
