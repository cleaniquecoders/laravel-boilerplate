<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="api-header-accept" content="{{ config('api.header.accept') }}">

@foreach(config('meta') as $key => $value)
	<meta name="{{ $key }}" content="{{ $value }}">
@endforeach