<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="api-header-accept" content="{{ config('api.header.accept') }}">
<meta name="api-version" content="{{ config('api.version') }}">

{{-- Tabler Meta --}}
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Language" content="en" />
<meta name="msapplication-TileColor" content="#2d89ef">
<meta name="theme-color" content="#4188c9">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="mobile-web-app-capable" content="yes">
<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">
<link rel="icon" href="{{ url('favicon.ico') }}" type="image/x-icon"/>
<link rel="shortcut icon" type="image/x-icon" href="{{ url('favicon.ico') }}" />

@foreach(config('meta') as $key => $value)
	<meta name="{{ $key }}" content="{{ $value }}">
@endforeach