@extends('layouts.admin')

@section('content')
	<div class="my-3 my-md-5">
		<div class="container">
			<div class="row justify-content-center">
				<div class="card col-xs-12 col-6">
					<div class="card-body">
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
	                            {{ html()->button(__('Update'), 'submit')->class('btn btn-outline-success') }}    
	                        </div>
						{{ html()->form()->close() }}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

