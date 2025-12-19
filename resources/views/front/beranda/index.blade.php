<x-front>

    <x-slot:title>{{ $title }}</x-slot:title>

    <!-- Hero Section -->
    <section id="hero" class="hero section">

        <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

            @foreach ($slides as $slide)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                    <img src="{{ asset('storage/' . $slide->image) }}" alt="">
                    <div class="carousel-container">
                        <h2>{{ $slide->title }}</h2>
                        <p>{{ $slide->description }}</p>
                        <a href="{{ $slide->link }}" class="btn-get-started" target="_blank">{{ $slide->button }}</a>
                    </div>
                </div><!-- End Carousel Item -->
            @endforeach


            <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>

        <div class="featured container">

            <div class="row gy-4">

                <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="featured-item position-relative">
                        <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
                        <h4><a href="" class="stretched-link">Sed ut perspici</a></h4>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                    </div>
                </div><!-- End Featured Item -->

                <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="200">
                    <div class="featured-item position-relative">
                        <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
                        <h4><a href="" class="stretched-link">Magni Dolores</a></h4>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                    </div>
                </div><!-- End Featured Item -->

                <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="300">
                    <div class="featured-item position-relative">
                        <div class="icon"><i class="bi bi-broadcast icon"></i></div>
                        <h4><a href="" class="stretched-link">Nemo Enim</a></h4>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                    </div>
                </div><!-- End Featured Item -->

            </div>

        </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="section about">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">
                <div class="col-lg-6 order-1 order-lg-2">
                    <img src="{{ asset('eterna/img/about.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 order-2 order-lg-1 content">
                    <h3>Voluptatem dignissimos provident</h3>
                    <p class="fst-italic">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore
                        magna aliqua.
                    </p>
                    <ul>
                        <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo
                                consequat.</span></li>
                        <li><i class="bi bi-check2-all"></i> <span>Duis aute irure dolor in reprehenderit in
                                voluptate velit.</span></li>
                        <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate trideta
                                storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
                    </ul>
                    <p>
                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                        reprehenderit in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident
                    </p>
                </div>
            </div>

        </div>

    </section><!-- /About Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item  position-relative">
                        <div class="icon">
                            <i class="bi bi-activity"></i>
                        </div>
                        <a href="#" class="stretched-link">
                            <h3>Nesciunt Mete</h3>
                        </a>
                        <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores
                            iure perferendis tempore et consequatur.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-broadcast"></i>
                        </div>
                        <a href="#" class="stretched-link">
                            <h3>Eosle Commodi</h3>
                        </a>
                        <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum
                            hic non ut nesciunt dolorem.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-easel"></i>
                        </div>
                        <a href="#" class="stretched-link">
                            <h3>Ledo Markt</h3>
                        </a>
                        <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id
                            voluptas adipisci eos earum corrupti.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-bounding-box-circles"></i>
                        </div>
                        <a href="#" class="stretched-link">
                            <h3>Asperiores Commodit</h3>
                        </a>
                        <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga
                            sit provident adipisci neque.</p>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-calendar4-week"></i>
                        </div>
                        <a href="#" class="stretched-link">
                            <h3>Velit Doloremque</h3>
                        </a>
                        <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed
                            animi at autem alias eius labore.</p>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-chat-square-text"></i>
                        </div>
                        <a href="#" class="stretched-link">
                            <h3>Dolori Architecto</h3>
                        </a>
                        <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure.
                            Corrupti recusandae ducimus enim.</p>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div><!-- End Service Item -->

            </div>

        </div>

    </section><!-- /Services Section -->

    <!-- Clients Section -->
    <section id="clients" class="section clients">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Clients</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit. Quisquam quos
                quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi
                quidem hic quas</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="swiper init-swiper">
                <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide"><img src="{{ asset('eterna/img/clients/clients-1.webp') }}"
                            class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('eterna/img/clients/clients-2.webp') }}"
                            class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('eterna/img/clients/clients-3.webp') }}"
                            class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('eterna/img/clients/clients-4.webp') }}"
                            class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('eterna/img/clients/clients-5.webp') }}"
                            class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('eterna/img/clients/clients-6.webp') }}"
                            class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('eterna/img/clients/clients-7.webp') }}"
                            class="img-fluid" alt=""></div>
                    <div class="swiper-slide"><img src="{{ asset('eterna/img/clients/clients-8.webp') }}"
                            class="img-fluid" alt=""></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>

    </section><!-- /Clients Section -->


</x-front>
