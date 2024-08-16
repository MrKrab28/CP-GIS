@props(['title'])

<div class="service-item  position-relative">
    <div class="icon">
        {{ $icon }}
    </div>
    <h3>{{ $title }}</h3>
    {{ $slot }}
    <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
</div>
