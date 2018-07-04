<form id="{{ $id or 'id-hidden-form'}}" 
	action="{{ $action }}" 
	method="{{ $method or 'POST' }}" 
	style="display: none;">
    @csrf
    {{ $inputs or '' }}
</form>