<x-layout>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <style>
        .benchmark-container {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        h1 {
            color: #333;
            border-bottom: 2px solid #333;
            padding-bottom: 10px;
        }

        .star {
            color: #444;
            font-size: 1.2em;
        }

        h2 {
            color: #444;
            /* font-style: italic; */
        }

        h3 {
            color: #444;
            margin-top: 20px;
        }

        p {
            line-height: 1.6;
        }

        ol,
        ul {
            padding-left: 20px;
        }

        li {
            margin-bottom: 10px;
        }

        ul li {}

        ol li {
            list-style-type: decimal;
        }

        .icon-container {
            display: flex;
            align-items: center;
        }
    </style>




    <!-- Hero Section -->
    <section id="hero" class="hero section">

        <div class="info d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-6 text-center">
                        <h2 class="text-white">Welcome to {{ config('app.name') }}</h2>
                        <p>
                            Perusahaan didirikan atas semangat profesionalitas serta dedikasi yang tinggi yang siap
                            bekontribusi dalam pembangunan nasional khususnya jasa konsultan perencanaan, lingkungan
                            dan kehutanan
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

        <x-section-title title="Projects">
            Beragam proyek inovatif untuk pembangunan berkelanjutan dan pelestarian lingkungan serta menghadirkan solusi
            teknologi dan kemitraan untuk kemajuan Pemetaan dan pengelolaan sumber daya alam..
        </x-section-title>
        <!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg"><img src="{{ asset('assets/images/pengadaan_bibit.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">Pengadaan Bibit Unggul</h4>
                                    <p>Program ini melibatkan kerja sama dengan berbagai rekanan mitra, mulai dari
                                        penyedia bibit
                                        lokal hingga kelompok tani di sekitar wilayah target. PT. Generasi Indojaya
                                        Sejahtera
                                        memastikan bahwa proses seleksi bibit dilakukan secara ketat, dengan fokus pada
                                        spesies yang
                                        cepat tumbuh dan memiliki daya tahan terhadap kondisi lingkungan yang sulit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg"><img src="{{ asset('assets/images/seleksi drone/IMG_9034.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">PBT PTSL Kabupaten Polewali Mandar</h4>
                                    <p>Tim perencanaan foto udara PT.Generasi Indojaya Sejahtera menggunakan teknologi
                                        drone dan
                                        remote sensing untuk menghasilkan citra udara yang akurat dan detail. Data ini
                                        kemudian
                                        digunakan oleh BPN Kabupaten Polewali Mandar dalam proses
                                        verifikasi dan pengukuran tanah secara lebih efisien.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg"><img src="{{ asset('assets/images/8.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">Rehabilitasi Daerah Aliran Sungai</h4>
                                    <p>PT.GIS sebagai pelaksana dan rekanan dari PT.
                                        Sumber Energi Jaya (SEJ), telah meluncurkan program rehabilitasi Daerah Aliran
                                        Sungai (DAS)
                                        dengan mengandalkan teknologi dan dukungan tenaga ahli yang kompeten. Program
                                        ini
                                        bertujuan untuk memulihkan DAS yang terdegradasi, memastikan kelestarian
                                        lingkungan, serta
                                        meningkatkan keberlanjutan sumber daya alam di wilayah Sulawesi Utara.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg"><img src="{{ asset('assets/images/timber cruising.jpg') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">Timber Cruising </h4>
                                    <p>PT. Generasi Indojaya Sejahtera, sebagai tenaga teknis perencanaan hutan, telah
                                        bermitra dengan PT. Cahaya Agro Sawit untuk melaksanakan timber cruising di
                                        kawasan Berau
                                        Barat. Proses ini bertujuan untuk mengumpulkan data yang akurat mengenai potensi
                                        hutan di
                                        wilayah tersebut, sehingga perencanaan pengelolaan hutan dapat dilakukan secara
                                        berkelanjutan
                                        dan tepat guna.</p>
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
            Kami menyediakan Beberapa layanan berkualitas tinggi dengan dedikasi penuh terhadap akurasi dan inovasi. Tim
            kami
            berkomitmen untuk mendukung berbagai sektor pembangunan melalui solusi pemetaan dan analisis spasial yang
            komprehensif, membantu klien dalam pengambilan keputusan dan perencanaan yang lebih baik.
        </x-section-title>
        <!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <x-service title="PEMBUATAN TITIK BENCHMARK">
                        <x-slot:icon>

                            <i class="fa-solid fa-map-location-dot"></i>
                        </x-slot:icon>
                        <p>
                            Titik benchmark adalah titik referensi tetap yang digunakan untuk memastikan pengukuran
                            elevasi
                            atau ketinggian di proyek Anda akurat dan konsisten. PT. Generasi Indojaya Sejahtera
                            menawarkan
                            layanan pembuatan titik benchmark yang esensial untuk berbagai jenis proyek, seperti
                            konstruksi,
                            survei lahan, dan pengelolaan sumber daya alam...
                        </p>
                        <button href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                            class="btn btn-outline-warning text-dark">Read more</button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel"><span
                                                class="star">★</span> PEMBUATAN TITIK BENCHMARK</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="benchmark-container">

                                            <h4>Layanan Pembuatan Titik Benchmark dari PT. Generasi Indojaya Sejahtera
                                            </h4>

                                            <p>Titik benchmark adalah titik referensi tetap yang digunakan untuk
                                                memastikan pengukuran elevasi atau ketinggian di proyek Anda akurat dan
                                                konsisten. PT. Generasi Indojaya Sejahtera menawarkan layanan pembuatan
                                                titik benchmark yang esensial untuk berbagai jenis proyek, seperti
                                                konstruksi, survei lahan, dan pengelolaan sumber daya alam.</p>

                                            <h3>Keunggulan Layanan Kami:</h3>
                                            <ol>
                                                <li>Penentuan Lokasi yang Tepat: Kami memilih lokasi strategis untuk
                                                    titik benchmark, memastikan akurasi dan kemudahan akses.</li>
                                                <li>Pemasangan yang Akurat: Kami memasang dan memandai titik benchmark
                                                    dengan alat presisi tinggi, memastikan setiap titik dapat digunakan
                                                    dalam jangka panjang.</li>
                                                <li>Dokumentasi Lengkap: Setiap titik benchmark dilengkapi dengan
                                                    koordinat GPS dan peta lokasi, memudahkan pemantauan dan penggunaan
                                                    di masa depan.</li>
                                                <li>Perawatan Berkala: Kami juga menawarkan layanan pemeliharaan dan
                                                    kalibrasi titik benchmark untuk menjaga keakuratannya.</li>
                                            </ol>

                                            <h3>Aplikasi Titik Benchmark:</h3>
                                            <ul>
                                                <li> Proyek Konstruksi: Menyediakan acuan yang presisi untuk memastikan
                                                    bangunan, jalan, dan infrastruktur lainnya dibangun dengan
                                                    ketinggian yang tepat.</li>
                                                <li> Survei Lahan dan Topografi: Menggunakan titik benchmark untuk
                                                    menghasilkan peta kontur yang akurat dan memudahkan analisis lahan.
                                                </li>
                                                <li> Pengelolaan Sumber Daya Alam: Memantau perubahan ketinggian di area
                                                    pertambangan, perkebunan, atau perikanan, mendukung pengelolaan
                                                    lahan yang berkelanjutan.</li>
                                                <li> Proyek Irigasi dan Air: Menggunakan titik benchmark untuk
                                                    memastikan aliran air direncanakan dan dikelola dengan baik,
                                                    mengurangi risiko banjir atau erosi.</li>
                                            </ul>

                                            <p>Dengan layanan ini, PT. Generasi Indojaya Sejahtera membantu memastikan
                                                setiap proyek berjalan sesuai rencana, dengan pengukuran yang akurat dan
                                                konsisten. Hubungi kami untuk memulai proyek Anda dengan fondasi yang
                                                kuat.</p>
                                        </div>
                                    </div>
                                    <div class="modal-footer">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </x-service>

                </div>

                <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <x-service title="PERTEK REHABILITASI DAERAH ALIRAN SUNGAI">
                        <x-slot:icon>
                            <i class="fa-solid fa-water"></i>
                        </x-slot:icon>
                        <p>
                            Dalam proyek yang melibatkan pengelolaan lahan, seperti pertambangan atau pembangunan
                            infrastruktur, keberhasilan tidak hanya dilihat dari keuntungan tetapi juga dari dampaknya
                            terhadap
                            lingkungan. Memahami Pertek Lokasi Rehabilitasi DAS adalah kunci untuk memastikan proyek
                            Anda berjalan lancar dan berkelanjutan.
                        </p>
                        <button href="#" data-bs-toggle="modal" data-bs-target="#exampleModal1"
                            class="btn btn-outline-warning text-dark">Read more</button>
                        <div class="modal fade" id="exampleModal1" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel"><span
                                                class="star">★</span> PERTEK REHABILITASI DAERAH ALIRAN SUNGAI</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="pertek-section">
                                            <h4>Optimalkan Rehabilitasi Daerah Aliran Sungai (DAS) dengan Pertek Lokasi
                                            </h4>
                                            <p>Dalam proyek yang melibatkan pengelolaan lahan, seperti pertambangan atau
                                                pembangunan
                                                infrastruktur, keberhasilan tidak hanya dilihat dari keuntungan tetapi
                                                juga dari dampaknya terhadap
                                                lingkungan. Memahami Pertek Lokasi Rehabilitasi DAS adalah kunci untuk
                                                memastikan proyek
                                                Anda berjalan lancar dan berkelanjutan.</p>
                                            <h6 class="pertek-title">Mengapa Pertek Lokasi Penting?</h6>
                                            <ol class="pertek-list">
                                                <li>
                                                    <h3>Legalitas yang Kuat</h3>
                                                    <p>Pertek memberikan kepastian hukum dan panduan teknis untuk
                                                        memastikan proyek Anda mematuhi regulasi lingkungan. Ini
                                                        mengurangi risiko sanksi dan menunjukkan komitmen terhadap
                                                        praktik bisnis yang bertanggung jawab.</p>
                                                </li>
                                                <li>
                                                    <h3>Meningkatkan Reputasi</h3>
                                                    <p>Memiliki Pertek menunjukkan bahwa Anda peduli terhadap
                                                        lingkungan. Ini meningkatkan citra perusahaan dan menarik
                                                        investor serta mitra bisnis yang peduli dengan keberlanjutan.
                                                    </p>
                                                </li>
                                                <li>
                                                    <h3>Panduan Teknis Efisien</h3>
                                                    <p>Pertek menyertakan panduan teknis untuk rehabilitasi yang
                                                        membantu Anda menggunakan sumber daya dengan lebih efisien. Ini
                                                        mengurangi kemungkinan kesalahan dan meningkatkan efektivitas
                                                        proyek.</p>
                                                </li>
                                                <li>
                                                    <h3>Manfaat Teknologi</h3>
                                                    <p>Teknologi seperti drone dan GIS mempercepat dan memperbaiki
                                                        akurasi pemetaan untuk rehabilitasi DAS. Data akurat membantu
                                                        dalam perencanaan dan pelaksanaan yang lebih baik.</p>
                                                </li>
                                                <li>
                                                    <h3>Investasi Jangka Panjang</h3>
                                                    <p>Rehabilitasi DAS membantu menjaga kualitas air, mengurangi risiko
                                                        banjir, dan mencegah erosi. Ini mendukung keberlanjutan bisnis
                                                        dan dapat dimasukkan dalam laporan keberlanjutan.</p>
                                                </li>
                                                <li>
                                                    <h3>Kolaborasi Stakeholder</h3>
                                                    <p>Pertek menunjukkan kesiapan untuk berkolaborasi dengan
                                                        pemerintah, masyarakat, dan LSM. Ini dapat membuka peluang
                                                        dukungan tambahan dan memperkuat hubungan dengan komunitas.</p>
                                                </li>
                                                <li>
                                                    <h3>Langkah Menuju Keberlanjutan</h3>
                                                    <p>Mengurus Pertek adalah langkah awal menuju pengembangan proyek
                                                        yang berkelanjutan. Ini menunjukkan bahwa proyek Anda
                                                        memperhatikan aspek lingkungan, sosial, dan ekonomi.</p>
                                                </li>
                                            </ol>

                                            <div class="kewajiban-section">
                                                <h3>Kewajiban Perusahaan Tambang</h3>
                                                <p>Perusahaan tambang wajib melakukan rehabilitasi DAS sesuai regulasi
                                                    berikut:</p>
                                                <ul class="kewajiban-list">
                                                    <li>UU PPLH (2009): Memastikan kelestarian lingkungan dan
                                                        rehabilitasi DAS.</li>
                                                    <li>UU Minerba (2009): Mengatur pengelolaan dan pemantauan
                                                        lingkungan termasuk rehabilitasi DAS.</li>
                                                    <li>UU No. 78 (2010): Mengatur reklamasi dan rehabilitasi DAS.</li>
                                                    <li>Permen LHK No. P.4/2021: Mengatur kewajiban rehabilitasi DAS
                                                        melalui reboisasi dan konservasi.</li>
                                                </ul>
                                                <p><strong>Implementasi dan Pengawasan:</strong> Pemerintah mengawasi
                                                    kepatuhan melalui KLHK dan ESDM. Perusahaan harus menyusun rencana
                                                    rehabilitasi dan menyediakan dana jaminan. Pelanggaran dapat
                                                    berakibat pada sanksi hukum.</p>
                                                <p>Rehabilitasi DAS bukan hanya kewajiban hukum tetapi juga investasi
                                                    yang menguntungkan untuk masa depan. Hubungi kami untuk memulai
                                                    proses dan dukungan lebih lanjut!</p>
                                            </div>
                                            <h4 class="text-center mt-3">
                                                <span class="star"></span> Rehabilitasi Daerah Aliran Sungai
                                            </h4>

                                            <h6>Tingkatkan Keberhasilan Proyek Anda dengan Keberlanjutan: Pilih Kami
                                                sebagai Partner Rehabilitasi DAS Anda!</h6>

                                            <p>
                                                <b>
                                                    Sebagai konsultan berpengalaman, kami memahami betapa pentingnya
                                                    rehabilitasi Daerah
                                                    Aliran Sungai (DAS) untuk kesuksesan dan keberlanjutan proyek
                                                    tambang
                                                    Anda. Berikut
                                                    alasan mengapa Anda harus memilih kami sebagai mitra terpercaya:

                                                </b>
                                            </p>
                                            <ul>
                                                <li><b>**Kepatuhan yang Terjamin:</b> Kami memastikan proyek Anda
                                                    sepenuhnya
                                                    mematuhi
                                                    regulasi dengan menyediakan Pertek Lokasi Rehabilitasi DAS yang
                                                    lengkap dan akurat,
                                                    menghindari risiko hukum dan denda.</li>
                                                <li><b>**Citra Perusahaan yang Lebih Baik:</b> Tingkatkan reputasi
                                                    perusahaan Anda dengan
                                                    menunjukkan komitmen terhadap lingkungan. Kami membantu membangun
                                                    citra positif
                                                    yang menarik bagi investor dan mitra bisnis.
                                                </li>
                                                <li><b>**Efisiensi Maksimal:</b> Dengan panduan teknis yang jelas dan
                                                    dukungan ahli, kami
                                                    memastikan proses rehabilitasi Anda berjalan efisien, mengurangi
                                                    biaya dan risiko, serta
                                                    meningkatkan hasil proyek.</li>
                                                <li><b>**Teknologi Terkini:</b> Manfaatkan teknologi terbaru seperti
                                                    drone dan GIS yang kami
                                                    gunakan untuk mendapatkan data akurat dan rencana rehabilitasi yang
                                                    efektif.</li>
                                                <li><b>**Investasi Jangka Panjang:</b> Kami membantu Anda melakukan
                                                    investasi jangka panjang
                                                    yang menguntungkan dengan rehabilitasi DAS yang efektif, mendukung
                                                    keberlanjutan
                                                    bisnis dan lingkungan.</li>
                                                <li><b>**Kolaborasi yang Kuat:</b> Kami membuka peluang untuk bekerja
                                                    sama dengan pemerintah,
                                                    masyarakat, dan LSM, memperkuat hubungan dan mendukung proyek Anda
                                                    dengan
                                                    dukungan tambahan.</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="modal-footer">


                                    </div>
                                </div>
                            </div>
                        </div>
                    </x-service>
                </div>




                <!-- End Service Item -->


            </div>
            <div class="row mt-4">


                <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <x-service title="SURVEI & PEMETAAN">
                        <x-slot:icon>
                            <i class="fa-solid fa-compass-drafting"></i>

                        </x-slot:icon>
                        <p>
                            Di PT. Generasi Indojaya Sejahtera, kami memahami bahwa setiap proyek membutuhkan data yang
                            akurat dan terperinci untuk sukses. Itulah sebabnya kami menawarkan berbagai layanan foto
                            udara
                            dan remote sensing yang dirancang untuk memenuhi kebutuhan spesifik Anda, baik di bidang
                            pertanian, kehutanan, perencanaan tata ruang, maupun pembangunan infrastruktur...
                        </p>
                        <button href="#" data-bs-toggle="modal" data-bs-target="#exampleModal2"
                            class="btn btn-outline-warning text-dark">Read more</button>
                        <div class="modal fade" id="exampleModal2" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel"><span
                                                class="star">★</span> SURVEI & PEMETAAN</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <ol class="pertek-list">
                                        </ol>
                                        <h4 class="text-center" style="text-decoration: underline">FOTO UDARA & REMOTE
                                            SENSING</h4>
                                        <p>
                                            <b>
                                                Layanan Foto Udara dan Remote Sensing dari PT. Generasi Indojaya
                                                Sejahtera: Solusi
                                                Lengkap untuk Pengelolaan Sumber Daya Alam
                                            </b>
                                        </p>
                                        <p>Di PT. Generasi Indojaya Sejahtera, kami memahami bahwa setiap proyek
                                            membutuhkan data yang
                                            akurat dan terperinci untuk sukses. Itulah sebabnya kami menawarkan berbagai
                                            layanan foto udara
                                            dan remote sensing yang dirancang untuk memenuhi kebutuhan spesifik Anda,
                                            baik di bidang
                                            pertanian, kehutanan, perencanaan tata ruang, maupun pembangunan
                                            infrastruktur. Berikut adalah
                                            layanan unggulan yang kami tawarkan:</p>

                                        <h3>Pemetaan Topografi dan Lahan</h3>
                                        <ul>
                                            <li>
                                                Deskripsi: Layanan pemetaan topografi kami memberikan gambaran
                                                tiga dimensi yang
                                                detail dari permukaan lahan. Ini sangat ideal untuk perencanaan
                                                infrastruktur,
                                                pengembangan properti, atau proyek rekayasa sipil.
                                            </li>
                                            <li>
                                                Manfaat: Memungkinkan perencanaan yang lebih baik dengan data
                                                elevasi dan kontur yang
                                                presisi, mengurangi risiko kesalahan dalam pembangunan.
                                            </li>
                                        </ul>
                                        <h3>Pemantauan Pertanian dan Tanaman</h3>
                                        <ul>
                                            <li>Deskripsi: Dengan menggunakan foto udara dan remote sensing, kami dapat
                                                memantau
                                                kondisi tanaman secara real-time, mendeteksi masalah seperti kekurangan
                                                air, penyakit, atau
                                                hama.</li>
                                            <li>
                                                Manfaat: Membantu petani meningkatkan hasil panen dengan
                                                mengidentifikasi masalah
                                                lebih awal dan memberikan solusi yang tepat waktu.
                                            </li>
                                        </ul>
                                        <h3>Pengawasan dan Pemantauan Hutan</h3>
                                        <ul>
                                            <li>
                                                Deskripsi: Layanan ini dirancang untuk memantau kesehatan hutan,
                                                mendeteksi aktivitas
                                                penebangan liar, dan mengelola konservasi hutan.
                                            </li>
                                            <li>
                                                Manfaat: Memastikan pengelolaan hutan yang berkelanjutan dan melindungi
                                                ekosistem
                                                dari kerusakan.
                                            </li>
                                        </ul>
                                        <h3>Analisis Lingkungan dan Dampak Ekologis</h3>
                                        <ul>
                                            <li>Deskripsi: Layanan ini menggunakan data remote sensing untuk
                                                menganalisis dampak
                                                lingkungan dari proyek pembangunan, termasuk perubahan tutupan lahan dan
                                                kualitas air.</li>
                                            <li>Manfaat: Memudahkan dalam menyusun laporan AMDAL dan memastikan proyek
                                                Anda
                                                sesuai dengan regulasi lingkungan.</li>
                                        </ul>
                                        <h3>Survei Infrastruktur dan Konstruksi</h3>
                                        <ul>
                                            <li>Deskripsi: Kami menyediakan pemetaan dan survei yang sangat akurat untuk
                                                proyek
                                                konstruksi, membantu Anda memantau perkembangan proyek dan memastikan
                                                kualitas
                                                pekerjaan.</li>
                                            <li>Manfaat: Meningkatkan efisiensi proyek konstruksi dengan
                                                mengidentifikasi potensi
                                                masalah sejak dini dan mengoptimalkan penggunaan sumber daya.</li>
                                        </ul>
                                        <h3>Penginderaan Jauh untuk Analisis Perubahan Iklim</h3>
                                        <ul>
                                            <li>Deskripsi: Layanan ini menyediakan data untuk memantau dan menganalisis
                                                perubahan
                                                iklim, termasuk pemantauan es, vegetasi, dan pola cuaca.</li>
                                            <li>
                                                Manfaat: Mendukung penelitian dan perencanaan adaptasi perubahan iklim
                                                dengan data
                                                yang akurat dan terkini.
                                            </li>
                                        </ul>
                                        <h3>Survei dan Pemetaan untuk Perencanaan Tata Ruang</h3>
                                        <ul>
                                            <li>
                                                Deskripsi: Kami menawarkan layanan survei dan pemetaan untuk membantu
                                                pemerintah
                                                daerah dan pengembang dalam merencanakan tata ruang yang efisien dan
                                                berkelanjutan.
                                            </li>
                                            <li>
                                                Manfaat: Memastikan perencanaan kota dan wilayah yang optimal dengan
                                                data yang
                                                akurat, mengurangi risiko banjir dan masalah lingkungan lainnya.
                                            </li>
                                        </ul>

                                        <p>
                                            Dengan beragam layanan ini, PT. Generasi Indojaya Sejahtera berkomitmen
                                            untuk menyediakan
                                            solusi yang tepat untuk setiap tantangan yang Anda hadapi. Menggunakan
                                            teknologi canggih dan
                                            tim profesional, kami siap membantu Anda mencapai hasil terbaik dalam setiap
                                            proyek Anda.
                                            Hubungi kami hari ini untuk konsultasi gratis dan temukan bagaimana layanan
                                            foto udara dan
                                            remote sensing kami dapat memberikan nilai tambah bagi bisnis atau proyek
                                            Anda.
                                        </p>
                                    </div>
                                    <div class="modal-footer">


                                    </div>
                                </div>
                            </div>
                        </div>
                    </x-service>
                </div>

                <div class="ms-auto col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <x-service title="PBPH (PERIZINAN BERUSAHA PEMANFAATAN HUTAN)">
                        <x-slot:icon>
                            <i class="fa-solid fa-tree"></i>
                        </x-slot:icon>
                        <p>
                            PBPH adalah izin resmi yang memungkinkan perusahaan untuk memanfaatkan sumber daya hutan
                            secara legal dan berkelanjutan.
                            membantu Anda memperoleh PBPH dengan proses yang efisien, transparan, dan sesuai dengan
                            regulasi yang berlaku.

                            Dengan PBPH, perusahaan Anda dapat menjalankan operasi pemanfaatan hutan sambil menjaga
                            keseimbangan ekosistem dan mendukung konservasi...

                        </p>
                        <button href="#" data-bs-toggle="modal" data-bs-target="#exampleModal3"
                            class="btn btn-outline-warning text-dark">Read more</button>
                        <div class="modal fade" id="exampleModal3" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel"><span
                                                class="star">★</span> Izin Pinjam Pakai Kawasan Hutan (IPPKH)</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <h4 class="text-center">Capai Keberhasilan Anda dengan Izin Pinjam Pakai
                                            Kawasan Hutan (IPPKH)
                                            yang Mudah dan Efisien!</h4>
                                        <p>
                                            <b>Ingin memastikan proyek Anda menggunakan kawasan hutan secara sah dan
                                                berkelanjutan?
                                                Dapatkan keuntungan maksimal dengan bantuan kami dalam mengurus Izin
                                                Pinjam Pakai
                                                Kawasan Hutan (IPPKH)!</b>
                                        </p>
                                        <h4 class="mt-3">Kenapa Kami?</h4>

                                        <ul>
                                            <li>
                                                <strong>🚀 Proses Cepat dan Tanpa Repot:</strong> Tim ahli kami akan
                                                menangani semua detail dan birokrasi IPPKH, sehingga Anda bisa fokus
                                                pada inti proyek tanpa terjebak dalam proses perizinan yang rumit.
                                            </li>

                                            <li>
                                                <strong>🔍 Kepastian Hukum yang Kuat:</strong> Pastikan proyek Anda
                                                berjalan sesuai hukum dengan dukungan kami dalam memperoleh IPPKH.
                                                Hindari risiko hukum dan sanksi dengan dokumentasi yang lengkap dan
                                                sesuai regulasi.
                                            </li>

                                            <li>
                                                <strong>🌿 Komitmen pada Keberlanjutan:</strong> Kami memastikan bahwa
                                                setiap langkah dalam proses perizinan memperhatikan dampak lingkungan,
                                                mendukung konservasi hutan, dan meningkatkan reputasi perusahaan Anda
                                                sebagai pelaku yang bertanggung jawab.
                                            </li>

                                            <li>
                                                <strong>✨ Meningkatkan Citra Perusahaan:</strong> Menunjukkan bahwa Anda
                                                berkomitmen pada kepatuhan dan keberlanjutan dengan IPPKH dari kami
                                                dapat memperkuat citra perusahaan Anda di mata investor, klien, dan
                                                mitra bisnis.
                                            </li>

                                            <li>
                                                <strong>🤝 Pendampingan Profesional dari Ahli:</strong> Dari persiapan
                                                dokumen hingga pemantauan dan pelaporan, tim kami yang berpengalaman
                                                akan memastikan setiap langkah dilakukan dengan efisien dan tepat waktu.
                                            </li>
                                        </ul>

                                        <p>
                                            <strong>Jangan biarkan perizinan menghambat kemajuan proyek Anda! Hubungi
                                                kami hari ini untuk layanan IPPKH yang cepat, mudah, dan efektif.
                                                Bersama kami, capai kesuksesan proyek dengan kepastian dan kepercayaan
                                                diri!</strong>
                                        </p>
                                    </div>
                                    <div class="modal-footer">


                                    </div>
                                </div>
                            </div>
                        </div>
                    </x-service>
                </div>


            </div>
            <div class="row mt-4">
                <div class="me-auto col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <x-service title="PERIZINAN LINGKUNGAN">
                        <x-slot:icon>
                            <i class="fa-solid fa-tree-city"></i>
                        </x-slot:icon>
                        <p>
                            Perizinan Lingkungan adalah kunci untuk menjalankan bisnis yang bertanggung jawab dan
                            berkelanjutan di era kesadaran lingkungan saat ini.
                            Tim kami membantu Anda memperoleh Izin Lingkungan dengan pendekatan yang komprehensif, mulai
                            dari analisis dampak lingkungan hingga penyusunan dokumen yang sesuai regulasi.
                            Kami menyediakan solusi end-to-end untuk Perizinan Lingkungan, termasuk AMDAL, UKL-UPL, dan
                            izin-izin terkait lainnya yang diperlukan untuk operasional bisnis Anda.

                            <button href="#" data-bs-toggle="modal" data-bs-target="#exampleModal4"
                                class="btn btn-outline-warning text-dark">Read more</button>
                        <div class="modal fade" id="exampleModal4" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel"><span
                                                class="star">★</span> PERIZINAN LINGKUNGAN</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <h4 class="text-center" style="text-decoration: underline">
                                            Optimalisasi Proyek Anda dengan Dukungan Perizinan Lingkungan Terpercaya
                                        </h4>
                                        <p>
                                            Perizinan Lingkungan adalah kunci untuk menjalankan bisnis yang bertanggung
                                            jawab dan
                                            berkelanjutan di era kesadaran lingkungan saat ini.
                                            Tim kami membantu Anda memperoleh Izin Lingkungan dengan pendekatan yang
                                            komprehensif, mulai
                                            dari analisis dampak lingkungan hingga penyusunan dokumen yang sesuai
                                            regulasi.
                                            Kami menyediakan solusi end-to-end untuk Perizinan Lingkungan, termasuk
                                            AMDAL, UKL-UPL, dan
                                            izin-izin terkait lainnya yang diperlukan untuk operasional bisnis Anda.
                                        </p>
                                        <ul>
                                            <li>
                                                Kepastian Hukum: Memastikan bahwa aktivitas rekanan mitra Anda sesuai
                                                dengan
                                                regulasi dan melindungi investasi dari risiko hukum.
                                            </li>
                                            <li>Hindari Denda: Menghindari denda besar dan masalah operasional dengan
                                                mematuhi
                                                aturan yang berlaku.</li>
                                            <li>
                                                Dukungan dan Sumber Daya: Mendapatkan dukungan dari pemerintah dan akses
                                                ke
                                                sumber daya yang mendukung pertumbuhan bisnis.
                                            </li>
                                            <li>
                                                Reputasi Berkelanjutan: Menunjukkan komitmen terhadap praktik bisnis
                                                yang ramah
                                                lingkungan dan bertanggung jawab.
                                            </li>
                                        </ul>

                                        <p>
                                            <strong>
                                                Sebagai konsultan ahli, kami menawarkan solusi perizinan lingkungan yang
                                                menyeluruh
                                                untuk memastikan proyek Anda berjalan lancar dan sesuai regulasi. Kenapa
                                                memilih kami?
                                                Berikut keuntungannya:
                                            </strong>
                                        </p>
                                        <ul>
                                            <li>Kepatuhan Tanpa Stress: Kami mengurus semua dokumen perizinan
                                                lingkungan, termasuk
                                                AMDAL, UKL-UPL, dan izin khusus. Dengan layanan kami, Anda dapat fokus
                                                pada inti
                                                bisnis tanpa khawatir tentang kepatuhan hukum.</li>

                                            <li>
                                                Reputasi Perusahaan yang Lebih Baik: Tingkatkan citra perusahaan Anda
                                                dengan
                                                memastikan bahwa setiap aspek proyek Anda sesuai dengan standar
                                                lingkungan. Kami
                                                membantu membangun reputasi positif yang menarik perhatian investor dan
                                                mitra bisnis.
                                            </li>
                                            <li>
                                                Efisiensi dan Keberhasilan Proyek: Dengan panduan kami, proses
                                                rehabilitasi DAS dan
                                                pemantauan dampak lingkungan menjadi lebih mudah dan efisien. Kami
                                                memastikan setiap
                                                langkah dioptimalkan untuk hasil maksimal dan pengelolaan yang efektif.
                                            </li>
                                            <li>
                                                Teknologi Canggih untuk Hasil Terbaik: Manfaatkan teknologi terbaru
                                                seperti drone dan
                                                GIS dalam pemetaan dan perencanaan. Kami menggunakan teknologi ini untuk
                                                menyediakan data akurat dan rencana rehabilitasi yang efektif.
                                            </li>
                                            <li>
                                                Investasi Berkelanjutan: Dengan mendukung proyek Anda dalam pemenuhan
                                                semua
                                                persyaratan perizinan, kami membantu Anda membuat investasi yang
                                                menguntungkan dan
                                                berkelanjutan, mendukung keberlanjutan lingkungan dan bisnis Anda.
                                            </li>
                                            <li>
                                                Kolaborasi yang Memudahkan: Kami berkolaborasi dengan pemerintah dan
                                                stakeholder
                                                terkait untuk memastikan semua izin dan dokumen diproses dengan cepat
                                                dan efektif. Ini
                                                membuka peluang tambahan dan memperkuat hubungan Anda dengan komunitas.
                                            </li>



                                        </ul>
                                        <p>
                                            <b>
                                                Jangan biarkan perizinan lingkungan menjadi penghalang untuk
                                                kesuksesan proyek Anda.
                                                Hubungi kami hari ini dan jadikan kami mitra terpercaya Anda dalam
                                                mengurus semua
                                                dokumen perizinan lingkungan!
                                            </b>
                                        </p>

                                    </div>
                                    <div class="modal-footer">

                                    </div>
                                </div>
                            </div>
                        </div>

                    </x-service>
                </div>
                <div class="me-auto col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <x-service title="INVETARISASI HUTAN / TIMBER CRUISING">
                        <x-slot:icon>

                            <div class="icon-container">
                                <i class="fa-solid fa-tree"></i><i class="fa-solid fa-tree"></i><i
                                    class="fa-solid fa-tree"></i>
                            </div>
                        </x-slot:icon>
                        <p>
                            Inventarisasi Hutan atau Timber Cruising adalah proses penting untuk menilai potensi dan
                            kondisi hutan secara akurat dan komprehensif.
                            Tim ahli kami menggunakan teknologi canggih dan metode terkini untuk melakukan inventarisasi
                            hutan yang presisi, efisien, dan sesuai standar internasional.
                            Layanan Timber Cruising kami mencakup pengukuran volume kayu, penilaian kualitas tegakan,
                            identifikasi spesies, dan analisis struktur hutan untuk mendukung perencanaan pengelolaan
                            hutan yang optimal.

                        </p>
                        <button href="#" data-bs-toggle="modal" data-bs-target="#exampleModal5"
                            class="btn btn-outline-warning text-dark">Read more</button>
                        <div class="modal fade" id="exampleModal5" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel"><span
                                                class="star">★</span> INVETARISASI HUTAN / TIMBER CRUISING</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <h4 class="text-center" style="text-decoration: underline">Tingkatkan
                                            Pengelolaan Hutan Anda dengan Layanan Inventarisasi dan Timber
                                            Cruising Profesional!</h4>

                                        <p>
                                            <b>Ingin memaksimalkan potensi dan nilai hutan Anda? Kami menyediakan
                                                layanan
                                                inventarisasi hutan dan timber cruising yang unggul untuk membantu Anda
                                                membuat
                                                keputusan yang cerdas dan strategis. Kenapa harus memilih kami?</b>
                                        </p>

                                        <ul>
                                            <li>
                                                Data Akurat, Keputusan Cerdas: Kami menawarkan pengukuran dan penilaian
                                                mendalam
                                                dengan teknologi terbaru untuk memastikan Anda mendapatkan informasi
                                                yang paling
                                                akurat tentang volume dan kualitas kayu di area hutan Anda.
                                            </li>
                                            <li>
                                                Perencanaan dan Pengelolaan Optimal: Dapatkan insight mendalam tentang
                                                jenis dan
                                                distribusi spesies pohon untuk perencanaan jangka panjang yang lebih
                                                efektif, memastikan
                                                pengelolaan hutan yang berkelanjutan dan efisien.
                                            </li>
                                            <li>
                                                Teknologi Terkini untuk Hasil Terbaik: Kami menggunakan perangkat lunak
                                                GIS dan alat
                                                pengukur modern untuk hasil yang lebih cepat dan detail, memberikan Anda
                                                data yang tepat
                                                untuk membuat keputusan yang lebih baik.
                                            </li>
                                            <li>
                                                Kepatuhan Terjamin: Kami memastikan semua proses mematuhi peraturan
                                                lingkungan
                                                yang berlaku, mengurangi risiko pelanggaran dan memastikan kegiatan
                                                pengelolaan hutan
                                                Anda sesuai dengan standar.
                                            </li>
                                            <li>
                                                Maksimalkan Nilai Investasi: Dengan data akurat dan perencanaan yang
                                                matang, Anda
                                                dapat meningkatkan profitabilitas dan daya tarik investasi hutan Anda
                                                kepada calon investor
                                                dan mitra bisnis.
                                            </li>
                                            <li>
                                                Layanan Profesional dan Terpercaya: Tim kami terdiri dari profesional
                                                berpengalaman
                                                dalam inventarisasi hutan dan timber cruising, siap memberikan layanan
                                                berkualitas tinggi
                                                yang Anda butuhkan.
                                            </li>

                                        </ul>
                                        <p>
                                            <b>
                                                Jangan biarkan potensi hutan Anda tidak terkelola dengan baik.
                                                Hubungi kami hari ini
                                                untuk mendiskusikan bagaimana layanan inventarisasi hutan dan timber
                                                cruising kami dapat
                                                membantu Anda meraih kesuksesan dan keberlanjutan!
                                            </b>
                                        </p>
                                    </div>

                                    <div class="modal-footer">

                                    </div>
                                </div>
                            </div>
                        </div>

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
                        memberikan layanan survei berkualitas tinggi untuk mendukung kesuksesan proyek Anda.
                        <button onclick="document.location.href = '{{ route('about') }}'"
                            class="btn btn-outline-warning text-dark">Read more</button>
                    </p>

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                        <i class="fa-brands fa-discourse"></i>
                        <div>
                            <h4><a class="stretched-link">Diskusi</a></h4>
                            <p>Proses pertukaran ide dan informasi antara anggota tim atau dengan klien. Ini mencakup
                                brainstorming, rapat proyek, dan sesi umpan balik. </p>
                        </div>
                    </div><!-- End Icon Box -->

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
                        <i class="fa-regular fa-handshake"></i>
                        <div>

                            <h4><a class="stretched-link">Negoisasi</a></h4>
                            <p>Proses mencapai kesepakatan antara berbagai pihak yang terlibat dalam proyek. Ini bisa
                                meliputi negosiasi kontrak, penentuan harga, alokasi sumber daya, atau penyelesaian
                                konflik.</p>
                        </div>
                    </div><!-- End Icon Box -->

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="500">
                        <i class="fa-solid fa-clipboard-list"></i>
                        <div>
                            <h4><a class="stretched-link">Pengumplan Data</a></h4>
                            <p>Tahap penting dalam setiap proyek di mana informasi relevan dikumpulkan dari berbagai
                                sumber. </p>
                        </div>
                    </div><!-- End Icon Box -->

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="600">
                        <i class="fa-solid fa-helmet-safety"></i>
                        <div>
                            <h4><a class="stretched-link">Pengerjaan Maksimal</a></h4>
                            <p>Upaya untuk mencapai hasil terbaik dalam setiap aspek pekerjaan. dan komitmen terhadap
                                kualitas.</p>
                        </div>

                    </div>
                    <!-- End Icon Box -->

                </div>

            </div>

        </div>

    </section><!-- /Alt Services Section -->

    <!-- Projects Section -->
    <section id="projects" class="projects section mb-5">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2 class="">Gallery</h2>
            <p></p>
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
                            <img src="{{ asset('assets/images/tc2.jpg') }}" class="img-fluid" alt="">
                            <div class="portfolio-info">

                                <a href="{{ asset('assets/images/tc3.jpg') }}" data-gallery="portfolio-gallery-app"
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
