@extends('layouts.admin')

@section('content')
	{{-- form --}}
    <div class="row justify-content-center mt-5">
        <div class="col-4">
        	@component('components.card', ['card_title' => __('Profile')])
        		@slot('card_title')
					<div class="btn-group float-right">
						<a href="{{ route('user.avatar.show') }}" 
		        			@include('components.tooltip', ['tooltip' => __('Upload Avatar')])
		        			class="btn text-success">
		        			<i class="fas fa-user-circle"></i>
		        		</a>
		        		<a href="{{ route('user.password.show') }}" 
		        			@include('components.tooltip', ['tooltip' => __('Security')])
		        			class="btn text-danger">
		        			<i class="fas fa-lock"></i>
		        		</a>
		        		<a href="{{ route('user.logs') }}" 
		        			@include('components.tooltip', ['tooltip' => __('Log')])
		        			class="btn text-info">
		        			<i class="fas fa-list"></i>
		        		</a>
		        	</div>
        		@endslot
                @slot('card_body')
                	<div class="text-center">
	                    @if(auth()->user()->getLastMediaUrl('avatar', 'thumbnail_navbar'))
			                <img src="{{ auth()->user()->getLastMediaUrl('avatar', 'thumbnail_navbar') }}"
			                    alt="avatar"
			                    class="img-rounded">
			            @else
			                <i class="fa fa-user-circle fa-7x"></i>
			            @endif
		            </div>
		            <hr>
		            {{ html()->form('PUT', route('user.update'))->open() }}
			            <div class="form-group">
			            	{{ html()->label(__('Name')) }}
	        				{{ html()->input('text')
	        					->name('name')
	        					->class('form-control')
	        					->value(auth()->user()->name) }}
	        			</div>

	        			<div class="form-group">
	        				{{ html()->label(__('E-mail')) }}
	        				{{ html()->input('text')
	        					->name('email')
	        					->class('form-control')
	        					->value(auth()->user()->email)
	        					->attribute('readonly', true) }}
	        			</div>

        			    <div class="btn-group float-right">
                            {{ html()->button(__('Update'), 'submit')->class('btn btn-success') }}    
                        </div>
					{{ html()->form()->close() }}
                @endslot
            @endcomponent
        </div>
    </div>
@endsection