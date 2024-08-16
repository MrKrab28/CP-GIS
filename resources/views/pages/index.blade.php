<x-layout>

    <!-- Hero Section -->
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

    </section><!-- /Hero Section -->

    <!-- Constructions Section -->
    <section id="constructions" class="constructions section">

        <!-- Section Title -->

        <x-section-title title="Constructions">
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

    </section><!-- /Constructions Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

        <!-- Section Title -->
        <x-section-title title="Services">
            Jasa-jasa yang dijasai GIS
        </x-section-title>
        <!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <x-service title="Rehabilitasi Lahan">
                        <x-slot:icon>
                            <i class="fa-solid fa-mountain-city"></i>
                        </x-slot:icon>
                        <p>
                            Rehabilitasi Lahan
                            Layanan pemulihan dan perbaikan lahan yang terdegradasi untuk mengembalikan fungsi ekologis
                            dan produktivitasnya....
                        </p>
                    </x-service>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <x-service title="Survei dan Pemetaan">
                        <x-slot:icon>
                            <i class="fa-solid fa-mountain-city"></i>
                        </x-slot:icon>
                        <p>
                            Survei dan Pemetaan
                            Jasa survei lapangan dan pemetaan digital menggunakan teknologi GIS terkini. Kami
                            menyediakan peta akurat dan detail untuk berbagai keperluan proyek....
                    </x-service>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <x-service title="Kajian Dokumen Lingkungan">
                        <x-slot:icon>
                            <i class="fa-solid fa-mountain-city"></i>
                        </x-slot:icon>
                        <p>
                            Kajian Dokumen Lingkungan
                            Layanan analisis dan penyusunan dokumen lingkungan seperti AMDAL, UKL-UPL, dan RKL-RPL....
                        </p>
                    </x-service>
                </div>


                <!-- End Service Item -->


            </div>
            <div class="row mt-4">

                <div class="ms-auto col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <x-service title="Inventarisasi Hutan dan Hasil Hutan Bukan Kayu">
                        <x-slot:icon>
                            <i class="fa-solid fa-mountain-city"></i>
                        </x-slot:icon>
                        <p>
                            Inventarisasi Hutan dan Hasil Hutan Bukan Kayu
                            Jasa pendataan dan pemetaan sumber daya hutan, termasuk hasil hutan non-kayu....
                        </p>
                    </x-service>
                </div>

                <div class="me-auto col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <x-service title="Izin Pinjam Pakai Kawasan Hutan">
                        <x-slot:icon>
                            <i class="fa-solid fa-mountain-city"></i>
                        </x-slot:icon>
                        <p>
                            Izin Pinjam Pakai Kawasan Hutan
                            Bantuan dalam proses permohonan dan pengurusan izin pinjam pakai kawasan hutan....
                        </p>
                    </x-service>
                </div>
            </div>

        </div>

    </section><!-- /Services Section -->

    <!-- Alt Services Section -->
    <section id="alt-services" class="alt-services section">
        <x-section-title title="About Us">

        </x-section-title>
        <div class="container">

            <div class="row justify-content-around gy-4">
                <div class="features-image col-lg-6" data-aos="fade-up" data-aos-delay="100"><img
                        src="{{ asset('assets/images/3.jpg') }}" alt=""></div>

                <div class="col-lg-5 d-flex flex-column justify-content-center" data-aos="fade-up"
                    data-aos-delay="200">
                    <h3>Generasi Indo Jaya Sejahtera</h3>
                    <p>Generasi Indo Jaya Sejahtera adalah perusahaan yang bergerak di bidang teknologi survei dan
                        pemetaan. Kami menyediakan solusi inovatif untuk proyek-proyek infrastruktur dan konstruksi di
                        seluruh Indonesia. Dengan teknologi canggih dan tim ahli kami, Generasi Indo Jaya Sejahtera siap
                        memberikan layanan survei berkualitas tinggi untuk mendukung kesuksesan proyek Anda.</p>

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-easel flex-shrink-0"></i>
                        <div>
                            <h4><a href="" class="stretched-link">Survei Topografi</a></h4>
                            <p>Pemetaan detail permukaan tanah dengan akurasi tinggi untuk perencanaan proyek.</p>
                        </div>
                    </div><!-- End Icon Box -->

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-patch-check flex-shrink-0"></i>
                        <div>
                            <h4><a href="" class="stretched-link">Nemo Enim</a></h4>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                voluptatum deleniti atque</p>
                        </div>
                    </div><!-- End Icon Box -->

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="500">
                        <i class="bi bi-brightness-high flex-shrink-0"></i>
                        <div>
                            <h4><a href="" class="stretched-link">Dine Pad</a></h4>
                            <p>Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut
                                deserunt minus aut eligendi omnis</p>
                        </div>
                    </div><!-- End Icon Box -->

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="600">
                        <i class="bi bi-brightness-high flex-shrink-0"></i>
                        <div>
                            <h4><a href="" class="stretched-link">Tride clov</a></h4>
                            <p>Est voluptatem labore deleniti quis a delectus et. Saepe dolorem libero sit non
                                aspernatur odit amet. Et eligendi</p>
                        </div>
                    </div><!-- End Icon Box -->

                </div>
            </div>

        </div>

    </section><!-- /Alt Services Section -->

    <!-- Projects Section -->
    <section id="projects" class="projects section mb-5">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2 class="">Projects</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

                <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">
                        <div class="portfolio-content h-100">
                            <img src="{{ asset('assets/images/10.jpg') }}" class="img-fluid" alt="">
                            <div class="portfolio-info">

                                <a href="{{ asset('assets/images/10.jpg') }}" data-gallery="portfolio-gallery-app"
                                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-construction">
                        <div class="portfolio-content h-100">
                            <img src="{{ asset('assets/images/seleksi drone/IMG_9013.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">

                                <a href="{{ asset('assets/images/seleksi drone/IMG_9013.jpg') }}"
                                    data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-repairs">
                        <div class="portfolio-content h-100">
                            <img src="{{ asset('assets/images/seleksi drone/IMG_9035.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">

                                <a href="{{ asset('assets/images/seleksi drone/IMG_9035.jpg') }}"
                                    data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-design">
                        <div class="portfolio-content h-100">
                            <img src="{{ asset('assets/images/IMG_8787.jpg') }}" class="img-fluid" alt="">
                            <div class="portfolio-info">

                                <a href="{{ asset('assets/images/IMG_8787.jpg') }}"
                                    data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">
                        <div class="portfolio-content h-100">
                            <img src="{{ asset('assets/images/seleksi/IMG_6259.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">

                                <a href="{{ asset('assets/images/seleksi/IMG_62591.jpg') }}"
                                    data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-construction">
                        <div class="portfolio-content h-100">
                            <img src="{{ asset('assets/images/seleksi/IMG_8841.jpg') }}" class="img-fluid"
                                alt="">
                            <div class="portfolio-info">

                                <a href="{{ asset('assets/images/seleksi/IMG_88411.jpg') }}"
                                    data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-repairs">
                        <div class="portfolio-content h-100">
                            <img src="{{ asset('assets/images/IMG_7633.jpg') }}" class="img-fluid" alt="">
                            <div class="portfolio-info">

                                <a href="{{ asset('assets/images/IMG_76331.jpg') }}"
                                    data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-design">
                        <div class="portfolio-content h-100">
                            <img src="{{ asset('assets/images/7.jpg') }}" class="img-fluid" alt="">
                            <div class="portfolio-info">

                                <a href="{{ asset('assets/images/7.jpg') }}" data-gallery="portfolio-gallery-book"
                                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-remodeling">
                        <div class="portfolio-content h-100">
                            <img src="{{ asset('assets/images/8.jpg') }}" class="img-fluid" alt="">
                            <div class="portfolio-info">

                                <a href="{{ asset('assets/images/8.jpg') }}" data-gallery="portfolio-gallery-app"
                                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    {{-- <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-construction">
                        <div class="portfolio-content h-100">
                            <img src="assets/img/projects/construction-3.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Product 3</h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                                <a href="assets/img/projects/construction-3.jpg" title="Product 3"
                                    data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-repairs">
                        <div class="portfolio-content h-100">
                            <img src="assets/img/projects/repairs-3.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Branding 3</h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                                <a href="assets/img/projects/repairs-3.jpg" title="Branding 2"
                                    data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-design">
                        <div class="portfolio-content h-100">
                            <img src="assets/img/projects/design-3.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Books 3</h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                                <a href="assets/img/projects/design-3.jpg" title="Branding 3"
                                    data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item --> --}}

                </div><!-- End Portfolio Container -->

            </div>

        </div>

    </section><!-- /Projects Section -->

</x-layout>
