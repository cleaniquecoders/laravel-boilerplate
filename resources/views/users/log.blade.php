@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-md-center mt-5">
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                @component('components.card', ['card_title' => 'Avatar'])
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
                @endcomponent
            </div>
        </div>
    </div>
@endsection
