@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Logs</div>

                <div class="panel-body">
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
