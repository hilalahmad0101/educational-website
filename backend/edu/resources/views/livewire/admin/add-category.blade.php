<div>
    <style>
        .previous {
            background-color: #1D90C2;
            color: white;
            padding: 6px 23px;
            border-radius: 27px;
            font-size: 16px;
            font-weight: 700;
            line-height: 30px;
            letter-spacing: 2px;
        }
    </style>
    <x-slot name="title">Add Category</x-slot>
    <div class="container">
        <a href="{{ route('admin.get-category') }}" class="previous" id="previous">&laquo; Previous</a>

        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="main__page" style="margin-top: 20px">
            <i class="fa-solid fa-house-user"></i> <span> > Category</span>
        </div>
        <div class="main__page__content">
            <div class="main__heading">
                <div class="main__left">
                    <h1 class="main__left__h1">Add Category</h1>
                    <p class="main__left__p">Include a service what you are offer</p>
                </div>
                {{-- <div class="main__right">
                    <p class="main__right__add">Add Service</p>
                    <button class="main__right__btn">
                        <i class="fa-solid fa-plus"></i>
                    </button>
                </div> --}}
            </div>
            <div class="main__page__form">
                <div class="main__page__form__right">
                    <form wire:submit.prevent='store'>

                        <div class="main__page__section2">
                            <h1 class="main__page__form__right__h1">
                                Title
                            </h1>
                            <p class="main__page__form__right__p">
                                This information will be displayed on service Card & service details </p>
                            <div class="main__page__form__cont">
                                <div class="my-2">
                                    <label for="">
                                        <h3>Title</h3>
                                    </label>
                                    <input type="text" wire:model="category_name" id="form__control"
                                        placeholder="Enter your Address" style="width: 50%">
                                    @error('category_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
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
