<x-front>

    <x-slot:title>{{ $title }}</x-slot:title>

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <div class="container py-5">
            <h1>{{ $title }}</h1>
        </div>
    </div><!-- End Page Title -->

    <div class="container">
        <div class="row">

            <div class="col-lg-8">

                <!-- Blog Posts Section -->
                <section id="blog-posts" class="blog-posts section">

                    <div class="container">

                        <div class="row gy-4">

                            <div class="col-lg-12">
                                <article>

                                    <div class="post-img">
                                        <img src="{{ asset('storage/' . $post->cover) }}" alt="{{ $post->title }}"
                                            class="w-100">
                                    </div>

                                    <div class="meta-top">
                                        <ul>
                                            <li class="d-flex align-items-center"><i class="bi bi-clock"></i>
                                                {{ $post->post_date_indo }}
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="content">
                                        {!! $post->content !!}

                                        <div class="read-more">
                                            <a href="{{ route('berita.index') }}">Back</a>
                                        </div>
                                    </div>

                                </article>
                            </div><!-- End post list item -->

                        </div><!-- End blog posts list -->

                    </div>

                </section><!-- /Blog Posts Section -->

            </div>

            <div class="col-lg-4 sidebar">

                <div class="widgets-container">

                    <!-- Categories Widget -->
                    <div class="categories-widget widget-item">

                        <h3 class="widget-title">Categories</h3>
                        <ul class="mt-3">
                            <li><a href="{{ route('berita.index') }}">Semua Kategori
                                    <span>({{ $totalPost }})</span></a></li>
                            @foreach ($categories as $category)
                                <li><a href="{{ route('berita.index', ['category' => $category->slug]) }}">{{ $category->title }}
                                        <span>({{ $category->posts_count }})</span></a></li>
                            @endforeach

                        </ul>

                    </div><!--/Categories Widget -->

                    <!-- Recent Posts Widget -->
                    <div class="recent-posts-widget widget-item">

                        <h3 class="widget-title">Recent Posts</h3>

                        @foreach ($recents as $recent)
                            <div class="post-item">
                                <img src="{{ asset('storage/' . $recent->cover) }}" alt="{{ $recent->title }}"
                                    class="flex-shrink-0">
                                <div>
                                    <h4><a href="{{ route('berita.show', $recent->slug) }}">{{ $recent->title }}</a>
                                    </h4>
                                    <time datetime="{{ $recent->pos_date }}">{{ $recent->pos_date_indo }}</time>
                                </div>
                            </div><!-- End recent post item-->
                        @endforeach

                    </div><!--/Recent Posts Widget -->

                </div>

            </div>

        </div>
    </div>


</x-front>
