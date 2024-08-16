<x-layout>
    <section id="hero" class="hero section">

        <div class="info d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-6 text-center">
                        <h2 class="">Welcome to {{ config('app.name') }}</h2>
                        <p>
                            Perusahaan didirikan atas dasar semangat profesionalisme untuk memenuhi kontribusi dan
                            berperan aktif dalam pembangunan nasional khususnya jasa konsultan penunjang kehutanan
                        </p>
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


    <section id="constructions" class="constructions section">

        <!-- Section Title -->

        <x-section-title title="Structure">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas voluptates est incidunt accusamus corrupti
            dolores laboriosam numquam in pariatur porro, amet id vitae doloremque, placeat recusandae animi asperiores
            soluta hic!
        </x-section-title>
        <!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg"><img src="{{ asset('assets/images/5.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">Eligendi omnis sunt veritatis.</h4>
                                    <p>Fuga in dolorum et iste et culpa. Commodi possimus nesciunt modi voluptatem
                                        placeat deleniti adipisci. Cum delectus doloribus non veritatis. Officia
                                        temporibus illo magnam. Dolor eos et.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg"><img src="{{ asset('assets/images/9.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">Possimus ut sed velit assumenda</h4>
                                    <p>Sunt deserunt maiores voluptatem autem est rerum perferendis rerum
                                        blanditiis. Est laboriosam qui iste numquam laboriosam voluptatem
                                        architecto. Est laudantium sunt at quas aut hic. Eum dignissimos.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg"><img src="{{ asset('assets/images/7.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">Error beatae dolor inventore aut</h4>
                                    <p>Dicta porro nobis. Velit cum in. Nesciunt dignissimos enim molestiae facilis
                                        numquam quae quaerat ipsam omnis. Neque debitis ipsum at architecto officia
                                        laboriosam odit. Ut sunt temporibus nulla culpa.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg"><img src="assets/images/drone-mapping.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">Expedita voluptas ut ut nesciunt</h4>
                                    <p>Aut est quidem doloremque voluptatem magnam quis excepturi vero quia. Eum eos
                                        doloremque architecto illo at beatae dolore. Fugiat suscipit et sint ratione
                                        dolores. Aut aliquid ea dolores libero nobis.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->

            </div>

        </div>

    </section>
</x-layout>
