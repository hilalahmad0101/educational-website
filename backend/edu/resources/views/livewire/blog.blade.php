<div>
    <x-slot name="title">Blog</x-slot>
    <!-- hero start -->
    <section class="other__hero">
        <div class="container">
            <h1 class="text-center">
                Blog
            </h1>
        </div>
    </section>
    <!-- hero end -->

    <!-- category section start -->
    <section class="category">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <div class="tag__all">
                        <h1>All</h1>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <div class="tag">
                        <h1>Scholarship</h1>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <div class="tag">
                        <h1>Financal guidline</h1>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <div class="tag">
                        <h1>Visa apparoval process</h1>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <div class="tag">
                        <h1>Visa</h1>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <div class="tag">
                        <h1>International student</h1>
                    </div>
                </div>
            </div>


        </div>
    </section>
    <!-- category section end -->

    <!-- latest blog start -->
    <section class="latest__blog">
        <div class="container">
            @forelse ($latestBlogs as $blog)
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 px-4">
                        <div class="image">
                            <img src="{{ asset('storage') }}/{{ $blog->image }}" alt="">
                            <div id="blog__button__next">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path
                                        d="M438.6 278.6l-160 160C272.4 444.9 264.2 448 256 448s-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L338.8 288H32C14.33 288 .0016 273.7 .0016 256S14.33 224 32 224h306.8l-105.4-105.4c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160C451.1 245.9 451.1 266.1 438.6 278.6z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 px-4">
                        <div class="latest__right">
                            <h1>{{ $blog->title }}</h1>
                            <div class="date__time">
                                <a>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path
                                            d="M256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512zM232 256C232 264 236 271.5 242.7 275.1L338.7 339.1C349.7 347.3 364.6 344.3 371.1 333.3C379.3 322.3 376.3 307.4 365.3 300L280 243.2V120C280 106.7 269.3 96 255.1 96C242.7 96 231.1 106.7 231.1 120L232 256z" />
                                    </svg>
                                    <span>11 July, 2022</span>
                                </a>
                                <a>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path
                                            d="M96 32C96 14.33 110.3 0 128 0C145.7 0 160 14.33 160 32V64H288V32C288 14.33 302.3 0 320 0C337.7 0 352 14.33 352 32V64H400C426.5 64 448 85.49 448 112V160H0V112C0 85.49 21.49 64 48 64H96V32zM448 464C448 490.5 426.5 512 400 512H48C21.49 512 0 490.5 0 464V192H448V464z" />
                                    </svg>
                                    <span>10:32 AM</span>
                                </a>
                            </div>
                            <p>
                                {{ substr($blog->description, 0, 100) }}
                            </p>
                            <div class="auther__profile">
                                <div class="profile__images">
                                    <img src="{{ $blog->admins->image }}" alt="">
                                </div>
                                <div class="profile__name">
                                    <h2>{{ $blog->admins->name }}</h2>
                                    <p>{{ $blog->admins->profession }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <h3>Latest Record not found</h3>
            @endforelse

        </div>
    </section>
    <!-- latest blog end -->

    <section class="blogs study-blog-page">
        <div class="container">
            <div class="row">
                @forelse ($blogs as $blog)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 px-4 my-3">
                        <div class="blog__card">
                            <a href="{{ route('users.blog-detail', ['id' => $blog->id]) }}">
                                <div class="blog__header">
                                    <img src="{{ asset('storage') }}/{{ $blog->image }}" alt="">
                                    <div id="blog__button__next">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <path
                                                d="M438.6 278.6l-160 160C272.4 444.9 264.2 448 256 448s-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L338.8 288H32C14.33 288 .0016 273.7 .0016 256S14.33 224 32 224h306.8l-105.4-105.4c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160C451.1 245.9 451.1 266.1 438.6 278.6z" />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                            <div class="blog__body">
                                <div class="date__time">
                                    <a>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path
                                                d="M256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512zM232 256C232 264 236 271.5 242.7 275.1L338.7 339.1C349.7 347.3 364.6 344.3 371.1 333.3C379.3 322.3 376.3 307.4 365.3 300L280 243.2V120C280 106.7 269.3 96 255.1 96C242.7 96 231.1 106.7 231.1 120L232 256z" />
                                        </svg>
                                        <span>{{ $blog->created_at->format('d') }}
                                            {{ $blog->created_at->format('M') }},
                                            {{ $blog->created_at->format('Y') }}</span>
                                    </a>
                                    <a>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <path
                                                d="M96 32C96 14.33 110.3 0 128 0C145.7 0 160 14.33 160 32V64H288V32C288 14.33 302.3 0 320 0C337.7 0 352 14.33 352 32V64H400C426.5 64 448 85.49 448 112V160H0V112C0 85.49 21.49 64 48 64H96V32zM448 464C448 490.5 426.5 512 400 512H48C21.49 512 0 490.5 0 464V192H448V464z" />
                                        </svg>
                                        <span>{{ $blog->created_at->format('h:i A') }}</span>
                                    </a>
                                </div>
                                <h1>{{ $blog->title }}</h1>
                            </div>
                        </div>
                    </div>
                @empty
                    <h3>Record Not Found</h3>
                @endforelse

            </div>
        </div>
    </section>
</div>
