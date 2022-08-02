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
    <x-slot name="title">Update Study Destination</x-slot>
    <div class="container">
        <a href="{{ route('admin.get-destination') }}" class="previous" id="previous">&laquo; Previous</a>

        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="main__page">
            <i class="fa-solid fa-house-user"></i> <span> > Study Destination</span>
        </div>
        <div class="main__page__content">
            <div class="main__heading">
                <div class="main__left">
                    <h1 class="main__left__h1">Update Setudy Dstinations</h1>
                    <p class="main__left__p">Include a service what you are offer</p>
                </div>
                {{-- <div class="main__right">
                    <p class="main__right__add">Add Destination</p>
                    <button class="main__right__btn">
                        <i class="fa-solid fa-plus"></i>
                    </button>
                </div> --}}
            </div>
            <div class="main__page__form">
                <div class="main__page__form__left">
                    <a href="#" class="nav-link {{ $offer_count == 2 ? 'active' : '' }}">Image</a>
                    <a href="#" class="nav-link {{ $offer_count == 3 ? 'active' : '' }}">Country Icon</a>
                    <a href="#" class="nav-link {{ $offer_count == 4 ? 'active' : '' }}">Title & Description</a>
                </div>
                <div class="main__page__form__right">
                    <form wire:submit.prevent='update({{ $edit_id }})'>
                        @if ($offer_count == 1)
                            <h1>Click on next button</h1>
                        @endif
                        @if ($offer_count == 2)
                            <div class="main__page__section1">
                                <h1 class="main__page__form__right__h1">
                                    Image
                                </h1>
                                <p class="main__page__form__right__p">
                                    This image will be displayed on service details page
                                </p>
                                <div class="main__page__form__image">
                                    <i class="fa-solid fa-images"></i>
                                    <input type="file" wire:model='image' name="myfile" />
                                    <p class="main__page__form__image__p">Drag and Drop an image, or <span>Browse</span>
                                    </p>
                                </div>
                                <p class="main__page__form__right__p__size">1600x1200 or higher recommended. Max 10MB
                                    each*
                                </p>
                                <img src="{{ asset('storage') }}/{{ $old_image }}" width="50" height="50"
                                    alt="">
                                <input type="hidden" wire:model='old_image' name="" id="">
                            </div>
                        @endif
                        @if ($offer_count == 3)
                            <div class="main__page__section2">
                                <h1 class="main__page__form__right__h1">
                                    Icon
                                </h1>
                                <p class="main__page__form__right__p">
                                    This image will be displayed on service Card
                                </p>
                                <div class="main__page__form__image">
                                    <i class="fa-solid fa-images"></i>
                                    <input type="file" wire:model='icon' name="myfile" />
                                    <p class="main__page__form__image__p">Drag and Drop an image, or <span>Browse</span>
                                    </p>
                                </div>
                                <p class="main__page__form__right__p__size">44x44 or higher recommended. Max 10MB each*
                                </p>
                                <img src="{{ asset('storage') }}/{{ $old_icon }}" width="50" height="50"
                                    alt="">
                                <input type="hidden" wire:model='old_icon' name="" id="">
                            </div>
                        @endif
                        @if ($offer_count == 4)
                            <div class="main__page__section2">
                                <h1 class="main__page__form__right__h1">
                                    Title and Description
                                </h1>
                                <p class="main__page__form__right__p">
                                    This information will be displayed on service Card & service details </p>
                                <div class="main__page__form__cont">
                                    <div class="my-2">
                                        <label for="">
                                            <h3>Title</h3>
                                        </label>
                                        <input type="text" wire:model="title" id="form__control"
                                            placeholder="Enter your Address">
                                        @error('title')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="my-2">
                                        <label for="">
                                            <h3>Description</h3>
                                        </label>
                                        <textarea wire:model="description" name="" placeholder="Add some descrioption text here" id="form__control"
                                            cols="30" rows="10"></textarea>
                                        @error('description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="main__btns">
                            @if ($offer_count == 4)
                                <button type="submit" class="main__page__form__image__btn__next">Save
                                </button>
                                <button type="button" wire:click.prevent="nextIconOffer({{ 1 }})"
                                    class="main__page__form__image__btn__close">Close</button>
                            @endif
                        </div>
                    </form>
                    @if ($offer_count != 4)
                        <button type="button" wire:click.prevent="nextOffer{{ $offer_count }}"
                            class="main__page__form__image__btn__next">Save &
                            Next</button>
                        <button type="button" wire:click.prevent="nextIconOffer1({{ 1 }})"
                            class="main__page__form__image__btn__close">Close</button>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
