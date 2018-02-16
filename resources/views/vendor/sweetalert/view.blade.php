<script type="text/javascript" src="{{ asset('js/swal.js') }}"></script>
@if (Session::has('sweetalert.json'))
    <script>
        swal({!! Session::pull('sweetalert.json') !!});
    </script>
@endif
@include('vendor.sweetalert.validator')