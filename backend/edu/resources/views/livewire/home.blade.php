<div>
    <x-slot name="title">Home</x-slot>
    <!-- hero start -->
    <!-- hero start -->
    <section class="hero">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="hero__left__content">
                        <div class="offer">
                            <p>Save over 30% in paid courses</p>
                        </div>
                        <div class="heading">
                            <h1>The best <span>solution</span> to all <span>migration</span> matters </h1>
                        </div>
                        <div class="paragrah">
                            <p>Since our establishment, we have been delivering high quality and sustainable software
                                solutions for corporate purposes of worldwide businesses.
                            </p>
                        </div>
                        <div class="hero_btn">
                            <button>Get in touch</button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="hero__right__image">
                        <img src="{{ asset('images/hero.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="top_offer">
        <div class="container left__border__offer">
            <div class="row d-flex align-items-center">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                    <div class="top__offer__left__heading">
                        <h1>Top University’s our partners</h1>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12">
                    <div class="top__offer__right">
                        <div class="top__offer__right__carousel owl-carousel owl-theme">
                            {{-- @forelse ($universities as $university)
                                <img src="{{ asset('storage') }}/{{ $university->country_flag }}" width="48"
                                    height="48" alt="">
                            @empty
                                <h4>Record not found</h4>
                            @endforelse --}}
                            <div class="item" id="image">
                                <img src="{{ asset('images/logo1.png') }}" style="width: 60px;" alt="">
                            </div>
                            <div class="item" id="image">
                                <img src="{{ asset('images/logo2.png') }}" style="width: 60px;" alt="">
                            </div>
                            <div class="item" id="image">
                                <img src="{{ asset('images/logo3.png') }}" style="width: 60px;" alt="">
                            </div>
                            <div class="item" id="image">
                                <img src="{{ asset('images/logo4.png') }}" style="width: 60px;" alt="">
                            </div>

                        </div>
                        <div id="next__button__offer">
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- our Company start -->
    <div class="container">
        <section class="our_company">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 my-3">
                    <div class="our__company__left">
                        <div class="our__company__left__image">
                            <img class="img1" src="{{ asset('images/hero3.png') }}" alt="">
                            <div class="our__company__left_small__image">
                                <img class="img2" src="{{ asset('images/hero2.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 my-3">
                    <p class="our__company__right__side__p">The best part of our company</p>
                    <h1 class="our__company__right__side__h1">We are offer
                        the best support</h1>
                    <div class="contact__information">
                        <div class="phone d-flex align-items-center">
                            <svg width="44" height="44" viewBox="0 0 44 44" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="44" height="44" rx="22" fill="url(#paint0_linear_40_514)" />
                                <path
                                    d="M28.9975 30C20.4659 30.0121 13.9909 23.4595 14 15.0025C14 14.4502 14.4477 14 15 14H17.6394C18.1349 14 18.5559 14.3641 18.6287 14.8543C18.8031 16.0292 19.1452 17.173 19.6445 18.2507L19.7472 18.4725C19.8901 18.7809 19.7933 19.1473 19.5167 19.3449C18.6993 19.9286 18.3869 21.1036 19.0237 22.0204C19.8228 23.1708 20.8301 24.1779 21.9803 24.9766C22.897 25.6132 24.0718 25.3009 24.6555 24.4836C24.8532 24.2069 25.2198 24.11 25.5284 24.2529L25.7492 24.3552C26.827 24.8545 27.9708 25.1966 29.1458 25.371C29.636 25.4437 30 25.8647 30 26.3603V29C30 29.5523 29.5512 30 28.9989 30L28.9975 30Z"
                                    fill="white" />
                                <defs>
                                    <linearGradient id="paint0_linear_40_514" x1="22" y1="0"
                                        x2="22" y2="44" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#2EC1E0" />
                                        <stop offset="1" stop-color="#2EC1E0" stop-opacity="0.5" />
                                    </linearGradient>
                                </defs>
                            </svg>
                            <span>00 1234 568 123</span>
                        </div>
                        <hr>
                        <div class="email d-flex align-items-center">
                            <svg width="44" height="44" viewBox="0 0 44 44" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0 22C0 9.84974 9.84974 0 22 0V0C34.1503 0 44 9.84974 44 22V22C44 34.1503 34.1503 44 22 44V44C9.84974 44 0 34.1503 0 22V22Z"
                                    fill="url(#paint0_linear_0_1)" />
                                <path
                                    d="M30.3337 19.1733V25.9583C30.3337 26.6501 30.069 27.3157 29.5939 27.8185C29.1188 28.3214 28.4693 28.6233 27.7787 28.6625L27.6253 28.6667H16.3753C15.6835 28.6667 15.018 28.402 14.5151 27.9269C14.0123 27.4518 13.7103 26.8023 13.6712 26.1117L13.667 25.9583V19.1733L21.7103 23.3867C21.7998 23.4335 21.8993 23.458 22.0003 23.458C22.1013 23.458 22.2008 23.4335 22.2903 23.3867L30.3337 19.1733ZM16.3753 15.3333H27.6253C28.2966 15.3332 28.9441 15.5825 29.442 16.0327C29.94 16.4829 30.253 17.1021 30.3203 17.77L22.0003 22.1283L13.6803 17.77C13.7449 17.1286 14.0362 16.5313 14.5018 16.0854C14.9674 15.6395 15.5767 15.3743 16.2203 15.3375L16.3753 15.3333H27.6253H16.3753Z"
                                    fill="white" />
                                <defs>
                                    <linearGradient id="paint0_linear_0_1" x1="22" y1="0" x2="22"
                                        y2="44" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#FC8955" />
                                        <stop offset="1" stop-color="#FC8955" stop-opacity="0.5" />
                                    </linearGradient>
                                </defs>
                            </svg>
                            <span>Company@gmail.com
                            </span>
                        </div>
                        <hr>
                        <div class="address d-flex align-items-center">
                            <svg width="44" height="44" viewBox="0 0 44 44" fill="none" <svg
                                width="44" height="44" viewBox="0 0 44 44" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0 22C0 9.84974 9.84974 0 22 0C34.1503 0 44 9.84974 44 22C44 34.1503 34.1503 44 22 44C9.84974 44 0 34.1503 0 22Z"
                                    fill="url(#paint0_linear_0_1)" />
                                <path
                                    d="M22 31C20.7369 29.9226 19.5662 28.7415 18.5 27.469C16.9 25.558 15 22.712 15 20C14.9986 17.1675 16.7042 14.6134 19.3211 13.5294C21.9379 12.4454 24.9501 13.0452 26.952 15.049C28.2685 16.3596 29.0059 18.1424 29 20C29 22.712 27.1 25.558 25.5 27.469C24.4338 28.7415 23.2631 29.9226 22 31ZM22 17C20.9282 17 19.9378 17.5718 19.4019 18.5C18.866 19.4282 18.866 20.5718 19.4019 21.5C19.9378 22.4282 20.9282 23 22 23C23.6569 23 25 21.6568 25 20C25 18.3431 23.6569 17 22 17Z"
                                    fill="white" />
                                <defs>
                                    <linearGradient id="paint0_linear_0_1" x1="22" y1="0"
                                        x2="22" y2="44" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#1D90C2" />
                                        <stop offset="1" stop-color="#1D90C2" stop-opacity="0.5" />
                                    </linearGradient>
                                </defs>
                            </svg>
                            <span>Zone/Block Level 1 Unit A2</span>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- our Company end -->

    <!-- education start -->

    <section class="education" style=" background-image: url({{ asset('images/main__bg.png') }});">
        <div class="container">
            <div class="top__box">
                <h1 class="top__box__h1">India’s Leading Overseas Education Consultants</h1>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="top__boxs">
                        <div class="top__boxs__head">
                            <h1>30</h1>
                        </div>
                        <div class="top__boxs__body">
                            <h1>Year</h1>
                            <p>Free Counseling for</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="top__boxs">
                        <div class="top__boxs__head">
                            <h1>30</h1>
                        </div>
                        <div class="top__boxs__body">
                            <h1>Year</h1>
                            <p>Free Counseling for</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="top__boxs">
                        <div class="top__boxs__head">
                            <h1>30</h1>
                        </div>
                        <div class="top__boxs__body">
                            <h1>Year</h1>
                            <p>Free Counseling for</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- education end -->
    <!-- live update start -->
    <section class="update">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-6 col-md-12 col-sm-12">
                    <div class="row d-flex align-content-center">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <p class="update__p">Live Update</p>
                            <h1 class="update__h1">Your will find latest updates</h1>
                            <p class="update__p__sub__title">World-class training and development programs developed by
                                top teachers</p>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="update__left__side">
                                <img src="{{ asset('images/main_img.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12">
                    <div class="update__right__box">
                        <ul>
                            <li>
                                <i class="fa-solid fa-caret-right"></i>
                                <span>World-class training and development programs developed by top teachers</span>
                            </li>
                            <li>
                                <i class="fa-solid fa-caret-right"></i>
                                <span>World-class training and development programs developed by top teachers</span>
                            </li>
                            <li>
                                <i class="fa-solid fa-caret-right"></i>
                                <span>World-class training and development programs developed by top teachers</span>
                            </li>
                            <li>
                                <i class="fa-solid fa-caret-right"></i>
                                <span>World-class training and development programs developed by top teachers</span>
                            </li>
                            <li>
                                <i class="fa-solid fa-caret-right"></i>
                                <span>World-class training and development programs developed by top teachers</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- live update end -->
    <!-- testimonial start -->
    <div class="container">
        <section class="testimonial">
            <p class="testimonial__sub__heading">Testimonial</p>
            <h1 class="testimonial__heading">What our students says about us</h1>
            <div class="testimonial__content">
                <div class="testimonial__carousel owl-carousel owl-theme">
                    <div class="item">
                        <div class="row d-flex align-items-center justify-content-center">
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 my-2">
                                <div class="textimonial__image">
                                    <img src="{{ asset('images/review.png') }}" alt="">
                                    <div class="textimonial__arrow">
                                        <i class="fa-solid fa-arrow-left" id="left__testimonial"></i>
                                        <i class="fa-solid fa-arrow-right" id="right__testimonial"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-7 col-md-6 col-sm-12 my-2">
                                <div class="testimonial__contents">
                                    <div class="testimoinial__star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <p>
                                        Eloren lqsum is simply dummy text of the printing.Lorem Iqsum has been the
                                        industry’s standard. when an unknown printer took scrambled.
                                    </p>
                                    <div class="testimonial__profile">
                                        <div class="left__testimonial__profile">
                                            <img src="{{ asset('images/review.png') }}" alt="">
                                        </div>
                                        <div class="right__testimonial__profile">
                                            <h1 class="profile__heading">Lucas Henry</h1>
                                            <p class="profile__subheading">Web Designer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>
    </div>
    <!-- testimonial end -->

    <!-- latest blog start -->
    <section class="blogs">
        <div class="container">
            <div class="row">
                @forelse ($blogs as $blog)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 px-4 my-3">
                        <div class="blog__card">
                            <div class="blog__header">
                                <img src="{{ asset('storage') }}/{{ $blog->image }}" alt="">
                                <div id="blog__button__next">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path
                                            d="M438.6 278.6l-160 160C272.4 444.9 264.2 448 256 448s-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L338.8 288H32C14.33 288 .0016 273.7 .0016 256S14.33 224 32 224h306.8l-105.4-105.4c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160C451.1 245.9 451.1 266.1 438.6 278.6z" />
                                    </svg>
                                </div>
                            </div>
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
                                        <span>{{ $blog->created_at->format('H:i A') }}</span>
                                    </a>
                                </div>
                                <h1>Engage your ommunity like never before</h1>

                            </div>
                        </div>
                    </div>
                @empty
                    <h3>Record Not Found</h3>
                @endforelse


            </div>
        </div>
    </section>
    <!-- latest blog end -->
    <!-- contact section start -->
    <section class="contact study__contact" style="margin-top: 123px;">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="contact__left__side study__contact_content">
                        <h3>Contact Us</h3>
                        <h1>How can we help?</h1>
                        <p> You can start and finish one of these popular courses in under a day - for free! Check out
                            the list below..
                        </p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="contact__right__side study__contact__right">
                        <div class="form">
                            <form action="/post/contact" method="POST">
                                @csrf
                                <div class="my-3">
                                    <label for="">Name:</label>
                                    <input type="text" class="form__control" name="name"
                                        placeholder="Full Name" id="">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="my-3">
                                    <label for="">Email:</label>
                                    <input type="email" class="form__control" name="email"
                                        placeholder="Your Email Address" id="">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="my-3">
                                            <label for="">Country:</label>
                                            <select name="country" id="" class="form__control">
                                                <option value="Canda">Canda</option>
                                                <option value="India">India</option>
                                                <option value="Pakistan">Pakistan</option>
                                            </select>
                                            @error('country')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="my-3">
                                            <label for="">Intake:</label>
                                            <select name="intake" id="" class="form__control">
                                                <option value="option 1">option 1</option>
                                                <option value="option 2">opiton 2</option>
                                                <option value="option 3">option 3</option>
                                            </select>
                                            @error('intake')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="my-3">
                                            <label for="">Preffered course:</label>
                                            <select name="p_course" id="" class="form__control">
                                                <option value="option 1">option 1</option>
                                                <option value="option 2">opiton 2</option>
                                                <option value="option 3">option 3</option>
                                            </select>
                                            @error('p_course')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="my-3">
                                            <label for="">Source of funding:</label>
                                            <select name="sof" id="" class="form__control">
                                                <option value="option 1">option 1</option>
                                                <option value="option 3">opiton 2</option>
                                                <option value="option 3">option 3</option>
                                            </select>
                                            @error('sof')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form__btn">
                                    <button type="submit">Book Appointment</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact section end -->
</div>
