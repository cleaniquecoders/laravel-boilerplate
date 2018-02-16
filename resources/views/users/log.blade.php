@extends('layouts.admin')

@section('content')
    <div class="row justify-content-md-center mt-5">
        <div class="col">
            @component('components.card', ['card_title' => 'Avatar'])
                @slot('card_body')
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
        </div>
    </div>
@endsection
