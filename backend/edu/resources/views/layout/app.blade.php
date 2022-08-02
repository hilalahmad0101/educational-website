<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>{{ $title }}</title>
    @livewireStyles
</head>

<body>
    <!-- navbar start -->
    <div class="container-fuild">
        <div class="container">
            <nav id="navbar">
                <div class="navbar__left__side">
                    <div class="navbar__left__side__logo">
                        <h1>Edu</h1>
                        <span>+</span>
                    </div>
                </div>
                <i class="fa-solid fa-bars" id="show__navbar" style="cursor: pointer"></i>
                <div class="navbar__right_side">
                    <a href="{{ route('users.home') }}"
                        class="nav-link {{ Request::routeIs('users.home') ? 'active' : '' }}">Home</a>
                    <a href="{{ route('users.destination') }}"
                        class="nav-link {{ Request::routeIs('users.destination') ? 'active' : '' }}">Study
                        Destinations</a>
                    <a href="{{ route('users.offer') }}"
                        class="nav-link {{ Request::routeIs('users.offer') ? 'active' : '' }}">What We
                        Offer
                    </a>
                    <a href="{{ route('users.university') }}"
                        class="nav-link {{ Request::routeIs('users.university') ? 'active' : '' }}">Uni-Partners
                    </a>
                    <a href="{{ route('users.blog') }}"
                        class="nav-link {{ Request::routeIs('users.blog') ? 'active' : '' }}">Blog</a>
                    <a>Contact
                        Us
                    </a>
                    <a hef="#" class="navbar__btn nav-link">Book Appointment</a>
                </div>
            </nav>
        </div>
    </div>
    <!-- navbar end -->

    {{ $slot }}

    <!-- footer section start -->
    <footer class="footer">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12 my-4">
                    <div class="footer__about">
                        <div class="footer__left__side">
                            <div class="footer__left__side__logo">
                                <h1>Edu</h1>
                                <span>+</span>
                            </div>
                        </div>
                        <p>
                            Lorem Ipsum is simply dummy text of
                            the printing and typesetting industry. Lorem
                            Ipsum has been the industry's standard
                            dummy text ever since the 1500s,
                        </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12 my-4">
                    <div class="footer__company">
                        <h1>Company</h1>
                        <p>
                            <a class="nav-link my-2">Course</a>
                            <a class="nav-link my-2"> Instructors</a>
                            <a class="nav-link my-2"> Sign In</a>
                            <a class="nav-link my-2"> Sign Up</a>
                            <a class="nav-link my-2"> Contact</a>
                    </div>
                    </p>

                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12 my-4">
                    <div class="footer__category">
                        <h1>Categorys</h1>
                        <p>
                            <a class="nav-link my-2"> Branding design</a>
                            <a class="nav-link my-2"> Ui/Ux designing</a>
                            <a class="nav-link my-2">Make elements</a>
                            <a class="nav-link my-2"> Business</a>
                            <a class="nav-link my-2"> Grapics design</a>
                        </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12 my-4">
                    <div class="footer__contact">
                        <h1>Contact Us</h1>
                        <p>
                            <a class="nav-link my-2">
                                <i class="fa-solid fa-phone"></i>
                                <span>+91 7687 675 879</span>
                            </a>
                            <a class="nav-link my-2">
                                <i class="fa-solid fa-envelope"></i>
                                <span>Company@gmail.com</span>
                            </a>
                            <a class="nav-link my-2">
                                <i class="fa-solid fa-location-dot"></i>
                                <span>3517 W. Gray St. Utica,
                                    Pennsylvania 57867</span>
                            </a>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </footer>

    <footer class="small__footer">
        <div class="text-center">
            <p>
                © Copyrights 2021 Edumen All rights reserved.
            </p>

        </div>
    </footer>
    <!-- footer section end -->

    <!-- js cdn -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    @livewireScripts
</body>

</html>
