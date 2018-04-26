@extends('layouts.app')

@section('body')
	@include('layouts.admin-' . config('layouts.admin'))
@endsection