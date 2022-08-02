<div>
    <x-slot name="title">Change Password</x-slot>
    <div class="container">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (session()->has('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{ session('error') }}</strong>
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
                                Change Password
                            </h1>
                            <div class="main__page__form__cont">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="my-2">
                                            <label for="">
                                                <h3>Username</h3>
                                            </label>
                                            <input type="text" wire:model.lazy="username" id="form__control"
                                                placeholder="Enter your Username">
                                            @error('username')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="my-2">
                                            <label for="">
                                                <h3>New Password</h3>
                                            </label>
                                            <input type="password" wire:model.lazy="new_password" id="form__control"
                                                placeholder="Enter your new Password">
                                            @error('new_password')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
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
