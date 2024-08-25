<x-layout>
    <x-hero title="STRUCTURE">

    </x-hero>

    <style>
        .flowchart {
            display: flex;
            flex-direction: column;
            align-items: center;
            font-family: Arial, sans-serif;
        }

        .box {
            width: 200px;
            padding: 20px;
            margin: 10px;
            text-align: center;
            border: 2px solid #333;
            border-radius: 10px;
            background-color: #f0f0f0;
        }

        .arrow {
            width: 0;
            height: 40px;
            border-left: 2px solid #333;
            margin: 5px 0;
        }

        #komisaris {
            background-color: #ffcccc;
        }

        #direktur {
            background-color: #ccffcc;
        }

        #direktur-teknis {
            background-color: #ccccff;
        }
    </style>
    <section id="constructions" class="constructions section">

        <!-- Section Title -->

        <x-section-title title="Structure">
            <p>Berikut ini adalah struktur organisasi perusahaan kami yang menggambarkan hierarki dan hubungan antara
                berbagai posisi kunci dalam perusahaan. Struktur ini mencerminkan komitmen kami terhadap kepemimpinan
                yang efektif dan manajemen yang terorganisir.</p>

        </x-section-title>
        <!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            {{-- <div class="col-xl-5">
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
                            </div> --}}
                            <div class="flowchart">
                                <div class="box" id="komisaris">KOMISARIS</div>
                                <div class="arrow"></div>
                                <div class="box" id="direktur">DIREKTUR</div>
                                <div class="arrow"></div>
                                <div class="box" id="direktur-teknis">DIREKTUR TEKNIS</div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->

                <!-- End Card Item -->

                <!-- End Card Item -->

                <!-- End Card Item -->

            </div>

        </div>

    </section>
</x-layout>
