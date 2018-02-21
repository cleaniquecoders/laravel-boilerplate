@push('styles')
    <link rel="stylesheet" href="{{ asset('css/datatable.css') }}">
@endpush

@push('scripts')
    <script type="text/javascript" src="{{ asset('js/datatable.js') }}"></script>
    <script type="text/javascript">
        $(function() {
            $('#{{ $table_id }}').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route($route_name) !!}',
                columns: [
                    @foreach($columns as $column)
                        { data: '{{ $column['data'] }}', name: '{{ $column['name'] }}' },
                    @endforeach
                ]
            });
        });
    </script>
@endpush

@component('components.table', ['table_id' => $table_id])
    @slot('thead')
        @foreach($columns as $column)
            <th>{{ $column['header'] }}</th>
        @endforeach
    @endslot
@endcomponent