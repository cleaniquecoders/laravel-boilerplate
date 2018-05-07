<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ theme('url', 'assets/js/require.min.js', 'tabler') }}"></script>
<script>
  requirejs.config({
      baseUrl: '{{ config('app.url') }}/tabler'
  });
</script>
<script src="{{ asset('js/font-awesome.js') }}"></script>
@include('vendor.sweetalert.view')
@routes
@translations
<script>
    jQuery(document).ready(function($) {
        $('.dropdown-toggle').dropdown();
    });
</script>