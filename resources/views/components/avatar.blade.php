@if(auth()->user()->getLastMediaUrl('avatar','thumbnail_' . (isset($type) ? $type : 'view')))
    <img src="{{ auth()->user()->getLastMediaUrl('avatar', 'thumbnail_' . (isset($type) ? $type : 'view')) }}"
        alt="avatar"
        class="img-rounded">
@else
    <i class="fa fa-user-circle text-primary {{ isset($type) && $type == 'view' ? 'fa-7x' : '' }}"></i>
@endif