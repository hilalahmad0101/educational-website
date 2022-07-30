<div>
    <x-slot name="title">Dashboard</x-slot>

    <div class="container">
        <div class="welcome">
            <h1>Hi <span>{{ Auth::guard('admin')->user()->name }} ,</span> Welcome back!</h1>
        </div>
        <div class="main__box">
            <p class="main__overview">Overview</p>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="main__boxs">
                        <div class="main__box__graph">
                            <svg width="100" height="80" viewBox="0 0 100 80" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M35 24.1509C20.2787 24.137 0 10.0629 0 10.0629V80H100V0C100 0 91.5475 20.8217 80.5 20.6289C74.213 20.5193 72.1627 14.8417 66 13.5849C53.4728 11.0302 47.7818 24.1631 35 24.1509Z"
                                    fill="url(#paint0_linear_142_157)" />
                                <defs>
                                    <linearGradient id="paint0_linear_142_157" x1="50" y1="0"
                                        x2="50" y2="80" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#FF8225" stop-opacity="0.2" />
                                        <stop offset="1" stop-color="#FF8225" stop-opacity="0.01" />
                                    </linearGradient>
                                </defs>
                            </svg>

                        </div>
                        <div class="main__box__content">
                            <h3>3430</h3>
                            <p>Total Visit</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="main__boxs">
                        <div class="main__box__graph">
                            <svg width="100" height="80" viewBox="0 0 100 80" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M35 24.1509C20.2787 24.137 0 10.0629 0 10.0629V80H100V0C100 0 91.5475 20.8217 80.5 20.6289C74.213 20.5193 72.1627 14.8417 66 13.5849C53.4728 11.0302 47.7818 24.1631 35 24.1509Z"
                                    fill="url(#paint0_linear_142_157)" />
                                <defs>
                                    <linearGradient id="paint0_linear_142_157" x1="50" y1="0"
                                        x2="50" y2="80" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#FF8225" stop-opacity="0.2" />
                                        <stop offset="1" stop-color="#FF8225" stop-opacity="0.01" />
                                    </linearGradient>
                                </defs>
                            </svg>

                        </div>
                        <div class="main__box__content">
                            <h3>3430</h3>
                            <p>Total Visit</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="main__boxs">
                        <div class="main__box__graph">
                            <svg width="100" height="80" viewBox="0 0 100 80" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M35 24.1509C20.2787 24.137 0 10.0629 0 10.0629V80H100V0C100 0 91.5475 20.8217 80.5 20.6289C74.213 20.5193 72.1627 14.8417 66 13.5849C53.4728 11.0302 47.7818 24.1631 35 24.1509Z"
                                    fill="url(#paint0_linear_142_157)" />
                                <defs>
                                    <linearGradient id="paint0_linear_142_157" x1="50" y1="0"
                                        x2="50" y2="80" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#FF8225" stop-opacity="0.2" />
                                        <stop offset="1" stop-color="#FF8225" stop-opacity="0.01" />
                                    </linearGradient>
                                </defs>
                            </svg>

                        </div>
                        <div class="main__box__content">
                            <h3>3430</h3>
                            <p>Total Visit</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
