<div>
    <style>
        #previous {
            text-decoration: none;
            display: inline-block;
            padding: 8px 16px;
        }

        #previous:hover {
            background-color: #ddd;
            color: black;
        }

        .previous {
            background-color: #f1f1f1;
            color: black;
        }
    </style>
    <x-slot name="title">Update Profile</x-slot>
    <div class="container">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="main__page">
            <i class="fa-solid fa-house-user"></i> <span> > Profile</span>
        </div>
        <div class="main__page__content">
            <div class="main__page__form">
                <div class="main__page__form__right">
                    <form wire:submit.prevent='update'>
                        <div class="main__page__section2">
                            <h1 class="main__page__form__right__h1">
                                Update Profile
                            </h1>
                            <div class="main__page__form__cont">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="my-2">
                                            <label for="">
                                                <h3>Name</h3>
                                            </label>
                                            <input type="text" wire:model.lazy="name" id="form__control"
                                                placeholder="Enter your Address">
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="my-2">
                                            <label for="">
                                                <h3>Username</h3>
                                            </label>
                                            <input type="text" wire:model.lazy="username" id="form__control"
                                                placeholder="Enter your Address">
                                            @error('username')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="my-2">
                                            <label for="">
                                                <h3>Email</h3>
                                            </label>
                                            <input type="text" wire:model.lazy="email" id="form__control"
                                                placeholder="Enter your Address">
                                            @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="my-2">
                                            <label for="">
                                                <h3>Profession</h3>
                                            </label>
                                            <input type="text" wire:model.lazy="profession" id="form__control"
                                                placeholder="Enter your Address">
                                            @error('profession')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="my-2">
                                            <label for="">
                                                <h3>Profile Image</h3>
                                            </label>
                                            <input type="file" wire:model="image" id="form__control"
                                                placeholder="Enter your Address">
                                            <img src="{{ asset('storage') }}/{{ $old_image }}" width="50"
                                                height="50" alt="">
                                            <input type="hidden" value="{{ $old_image }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main__btns">
                            <button type="submit" class="main__page__form__image__btn__next">Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
