<form id="{{ $id ?? 'id-hidden-form'}}" 
	action="{{ $action }}" 
	method="{{ $method ?? 'POST' }}" 
	style="display: none;">
    @csrf
    {{ $inputs ?? '' }}
</form>