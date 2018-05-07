@if (count($breadcrumbs))

    <ol class="breadcrumb bg-transparent rounded-0">
        @foreach ($breadcrumbs as $breadcrumb)

            @if ($breadcrumb->url && !$loop->last)
                <li class="breadcrumb-item"><a class="text-primary" href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
            @else
                <li class="breadcrumb-item text-dark active">{{ $breadcrumb->title }}</li>
            @endif

        @endforeach
    </ol>

@endif