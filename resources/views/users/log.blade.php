@component('components.panels.small', ['panel_title' => 'User Log'])
    @slot('panel_body')
        @component('components.table')
            @slot('thead')
                <tr>
                    <th>Description</th>
                    <th>Day, Date &amp; Time</th>
                </tr>
            @endslot
            @slot('tbody')
                @foreach($logs as $log)
                    <tr>
                        <td>{{ $log->description }}</td>
                        <td>{{ $log->created_at->toDayDateTimeString() }}</td>
                    </tr>
                @endforeach
            @endslot
        @endcomponent
    @endslot
@endcomponent
