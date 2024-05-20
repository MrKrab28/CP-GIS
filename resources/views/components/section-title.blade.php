@props(['title'])

<div class="container section-title" data-aos="fade-up">
    <h2 class="">{{ $title }}</h2>
    <p>{{ $slot }}</p>
</div>
