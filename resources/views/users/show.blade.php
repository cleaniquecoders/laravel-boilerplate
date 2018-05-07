@extends('layouts.admin')

@section('content')
	<div class="my-3 my-md-5">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<div class="card card-profile">
							<div class="card-body text-center">
								@if(auth()->user()->getLastMediaUrl('avatar', 'thumbnail_navbar'))
								<img src="{{ auth()->user()->getLastMediaUrl('avatar', 'thumbnail_navbar') }}"
										alt="avatar"
										class="card-profile-img">
						@else
							<span class="avatar">
												<i class="fe fe-user text-light"></i>
										</span>
						@endif
								<hr>
								<h3 class="mb-3">{{ user()->name }}</h3>
								<p class="mb-4">
									{{ user()->email }}
								</p>
							</div>
							
							<div class="card-footer">
								<a href="{{ route('manage.users.edit', user()->hashslug) }}" class="btn float-right btn-outline-primary">{{ __('Edit') }}</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection