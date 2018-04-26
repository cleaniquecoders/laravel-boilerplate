<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="api-header-accept" content="{{ config('api.header.accept') }}">

@foreach(config('meta') as $key => $value)
	<meta name="{{ $key }}" content="{{ $value }}">
@endforeach