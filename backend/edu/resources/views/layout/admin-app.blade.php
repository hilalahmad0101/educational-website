<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Admin | {{ $title }}</title>
    @livewireStyles
</head>

<body>
    <div id="navbar" class="d-flex align-items-start">
        <div class="sidebar">
            <div class="logo">
                <div class="sidebar__side__logo">
                    <h1>Edu</h1>
                    <span>+</span>
                </div>
                <i id="closed" style="cursor: pointer;" class="fa-solid fa-xmark"></i>
            </div>
            <div class="sidebar__menu">
                <ul>
                    <li>
                        <a href="{{ route('admin.dashboard') }}"
                            class="{{ Request::routeIs('admin.dashboard') ? 'active' : '' }}">
                            <i class="fa-solid fa-gauge"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.get-category') }}"
                            class="{{ Request::routeIs('admin.get-category') ? 'active' : '' }}">
                            <i class="fa-solid fa-gauge"></i>
                            <span>Category</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.get-offer') }}"
                            class="{{ Request::routeIs('admin.get-offer') ? 'active' : '' }}">
                            <i class="fa-brands fa-buffer"></i>
                            <span>What We Offer</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.get-university') }}"
                            class="{{ Request::routeIs('admin.get-university') ? 'active' : '' }}">
                            <i class="fa-solid fa-school"></i>
                            <span>Universities</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.get-blog') }}"
                            class="{{ Request::routeIs('admin.get-blog') ? 'active' : '' }}">
                            <i class="fa-brands fa-blogger"></i>
                            <span>Blog</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.get-destination') }}"
                            class="{{ Request::routeIs('admin.get-destination') ? 'active' : '' }}">
                            <i class="fa-solid fa-book"></i>
                            <span>Study Destination</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.contact') }}"
                            class="{{ Request::routeIs('admin.contact') ? 'active' : '' }}">
                            <i class="fa-solid fa-address-book"></i>
                            <span>Contact</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.setting') }}"
                            class="{{ Request::routeIs('admin.setting') ? 'active' : '' }}">
                            <i class="fa-solid fa-gear"></i>
                            <span>Setting</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main__content">
            <div id="main__top__navbar">
                <i style="cursor: pointer;" id="show" class="fa-solid fa-bars"></i>
                <div class="main__top__search">
                    <input type="text" name="" placeholder="Search here..." id="form__control">
                </div>
                <div class="main__top__profile">
                    <i class="fa-solid fa-bell"></i>
                    <div class="main__profile">
                        <div class="dropdown">
                            <img style="cursor:pointer;" class="dropdown-toggle" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false"
                                src="{{ asset('storage') }}/{{ Auth::guard('admin')->user()->image }}" alt="">
                            <span>{{ Auth::guard('admin')->user()->name }}</span>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="{{ route('admin.update-profile') }}">Update
                                        Profile</a></li>
                                <li><a class="dropdown-item" href="{{ route('admin.change-password') }}">Change
                                        Password</a></li>
                                @livewire('admin.auth.logout')
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            {{ $slot }}
        </div>
    </div>
    <script src="{{ asset('admin/js/jquery.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('admin/js/app.js') }}"></script>
    @livewireScripts
</body>

</html>
