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
        <div id="sidebar">
            <div class="logo">
                <div class="sidebar__side__logo">
                    <h1>Edu</h1>
                    <span>+</span>
                </div>
            </div>
            <div class="sidebar__menu">
                <ul>
                    <li>
                        <a href="" class="active">
                            <i class="fa-solid fa-house-user"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa-brands fa-buffer"></i>
                            <span>What We Offer</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa-solid fa-house-user"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa-solid fa-house-user"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa-solid fa-house-user"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa-solid fa-house-user"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a href="">
                            <i class="fa-solid fa-house-user"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main__content">
            <div id="main__top__navbar">
                <div class="main__top__search">
                    <input type="text" name="" placeholder="Search here..." id="form__control">
                </div>
                <div class="main__top__profile">
                    <i class="fa-solid fa-bell"></i>
                    <div class="main__profile">
                        <img src="{{ Auth::guard('admin')->user()->image }}" alt="">
                        <span>{{ Auth::guard('admin')->user()->name }}</span>
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
