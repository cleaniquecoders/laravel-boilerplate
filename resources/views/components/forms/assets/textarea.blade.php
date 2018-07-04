@push('styles')
	<style>
		.ck-editor__editable {
	    	min-height: 480px;
		}
	</style>
@endpush
@push('scripts')
	<script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
@endpush