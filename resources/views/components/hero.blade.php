@props(['title'])

<section id="hero" class="hero section">

    <div class="info d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12 text-center">
                    <h2 class="">PT. {{ config('app.name') }}</h2>
                    <h3>{{ $title }}
                    </h3>
                    <p>{{ $slot }}</p>
                </div>
            </div>
        </div>
    </div>

    <div id="section-fqREP4OWmC-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

        @for ($i = 1; $i <= 4; $i++)
            <div class="carousel-item {{ $i == 1 ? 'active' : '' }}">
                <img src="{{ asset('assets/images/' . $i . '.jpg') }}" alt="">
            </div>
        @endfor


        <a class="carousel-control-prev" href="#section-fqREP4OWmC-carousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#section-fqREP4OWmC-carousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

    </div>

</section>
