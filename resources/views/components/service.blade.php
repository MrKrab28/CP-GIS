@props(['title'])

<div class="service-item  position-relative">
    <div class="icon">
        {{ $icon }}
    </div>
    <h3>{{ $title }}</h3>
    {{ $slot }}

    

</div>

