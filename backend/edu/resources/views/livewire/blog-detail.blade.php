<div>
    <x-slot name="title">{{ $blog->title }}</x-slot>
    <section class="page__detail">
        <div class="container">
            <h1>{{ $blog->title }}</h1>
            <div class="date__time">
                <a>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path
                            d="M256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512zM232 256C232 264 236 271.5 242.7 275.1L338.7 339.1C349.7 347.3 364.6 344.3 371.1 333.3C379.3 322.3 376.3 307.4 365.3 300L280 243.2V120C280 106.7 269.3 96 255.1 96C242.7 96 231.1 106.7 231.1 120L232 256z" />
                    </svg>
                    <span>{{ $blog->created_at->format('d M') }}, {{ $blog->created_at->format('Y') }}</span>
                </a>
                <a>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path
                            d="M96 32C96 14.33 110.3 0 128 0C145.7 0 160 14.33 160 32V64H288V32C288 14.33 302.3 0 320 0C337.7 0 352 14.33 352 32V64H400C426.5 64 448 85.49 448 112V160H0V112C0 85.49 21.49 64 48 64H96V32zM448 464C448 490.5 426.5 512 400 512H48C21.49 512 0 490.5 0 464V192H448V464z" />
                    </svg>
                    <span>{{ $blog->created_at->format('H:i A') }}</span>
                </a>
            </div>
            <div class="auther__profile my-3">
                <div class="profile__images">
                    <img src="{{ asset('storage') }}/{{ $blog->admins->image }}" alt="">
                </div>
                <div class="profile__name">
                    <h2>{{ $blog->admins->name }}</h2>
                    <p>{{ $blog->admins->prefession }}</p>
                </div>
            </div>
            <img src="{{ asset('storage') }}/{{ $blog->image }}" class="post__image" alt="{{ $blog->title }}">
            <p>{{ $blog->description }}</p>

        </div>
        <div class="comments">
            <div class="container">
                <h2>Comments</h2>
                @forelse ($comments as $comment)
                    <div>
                        <div class="auther__profile">
                            <div class="profile__images">
                                <img src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8dXNlcnN8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60"
                                    alt="">
                            </div>
                            <div class="profile__name">
                                <h2>{{ $comment->name }}</h2>
                                <p>{{ $comment->created_at->format('d M, Y @H:i A') }}</p>
                            </div>
                        </div>
                        <p class="comment__p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, impedit
                            necessitatibus odit
                            aliquam voluptatum, quo debitis aspernatur fuga eius quos veritatis magni doloribus eaque
                            dolores
                            est! Tempora, ratione sunt? Voluptatum?</p>
                    </div>
                @empty
                    <h3>Record not found</h3>
                @endforelse
            </div>
        </div>
        <div class="container">
            <div class="contact__right__side" style="box-shadow:none; margin-top:40px;">
                <div class="form">
                    <form wire:submit.prevent='store'>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="my-3">
                                    <label for="">Name:</label>
                                    <input type="text" class="form__control" wire:model.lazy="name"
                                        placeholder="Full Name" id="">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="my-3">
                                    <label for="">Email:</label>
                                    <input type="email" class="form__control" wire:model.lazy="email"
                                        placeholder="Your Email Address" id="">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="my-3">
                            <label for="">Message:</label>
                            <textarea wire:model.lazy="message" id="" placeholder="Enter your Message" cols="30" class="form__control"
                                rows="10"></textarea>
                            @error('message')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form__btn">
                            <button type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="d-flex justify-content-between align-items-center my-5">
            <h3>Related Post</h3>

            <div class="form__btn">
                <button>View More</button>
            </div>
        </div>
        <section class="related">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="blog__card">
                        <div class="blog__header">
                            <img src="images/img.jpg" alt="">
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
                            <h1>Engage your ommunity like never before</h1>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</div>
