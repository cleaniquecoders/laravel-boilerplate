<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/axios.js') }}"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="{{ asset('js/font-awesome.js') }}"></script>
@include('vendor.sweetalert.view')
@routes
@stack('scripts')
<script>
    jQuery(document).ready(function($) {
        $('.dropdown-toggle').dropdown();
    });
</script>