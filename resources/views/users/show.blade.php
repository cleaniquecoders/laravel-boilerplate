@extends('layouts.admin')

@section('content')
	{{-- form --}}
    <div class="row justify-content-center mt-5">
        <div class="col-4">
        	@component('components.card', ['card_title' => 'Avatar'])
        		@slot('card_title')
        			Profile
					<div class="btn-group float-right">
						<a href="{{ route('user.avatar.show') }}" 
		        			@include('components.tooltip', ['tooltip' => 'Upload Avatar'])
		        			class="btn btn-default">
		        			<i class="fas fa-user-circle"></i>
		        		</a>
		        		<a href="{{ route('user.logs') }}" 
		        			@include('components.tooltip', ['tooltip' => 'Log'])
		        			class="btn btn-default">
		        			<i class="fas fa-list"></i>
		        		</a>
		        	</div>
        		@endslot
                @slot('card_body')
                	<div class="text-center">
                    @if(auth()->user()->getLastMediaUrl('avatar','thumbnail_navbar'))
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
			            	{{ html()->label('Name') }}
	        				{{ html()->input('text')
	        					->name('name')
	        					->class('form-control')
	        					->value(auth()->user()->name) }}
	        			</div>

	        			<div class="form-group">
	        				{{ html()->label('E-mail') }}
	        				{{ html()->input('text')
	        					->name('email')
	        					->class('form-control')
	        					->value(auth()->user()->email)
	        					->attribute('readonly', true) }}
	        			</div>

        			    <div class="btn-group float-right">
                            {{ html()->button('Update', 'submit')->class('btn btn-success') }}    
                        </div>
					{{ html()->form()->close() }}
                @endslot
            @endcomponent
        </div>
    </div>
@endsection