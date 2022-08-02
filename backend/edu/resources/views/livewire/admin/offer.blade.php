<div>
    <x-slot name="title">Offer</x-slot>
    <div class="container">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="main__page">
            <i class="fa-solid fa-house-user"></i> <span> > What we offer</span>
        </div>

        <div class="main__page__content">
            <div class="main__heading">
                <div class="main__left">
                    <h1 class="main__left__h1">Add Service</h1>
                    <p class="main__left__p">Include a service what you are offer</p>
                </div>
                <div class="main__right">
                    <p class="main__right__add">Add Service</p>
                    <a href="{{ route('admin.add-offer') }}"> <button class="main__right__btn">
                            <i class="fa-solid fa-plus"></i>
                        </button></a>
                </div>
            </div>
            <div class="main__page__form">
                @forelse ($offers as $offer)
                    <div class="table__data w-100">
                        <div class="left__table">
                            <div class="count">
                                {{ $offer->id }}
                            </div>
                            <div class="img">
                                <img src="{{ asset('storage') }}/{{ $offer->icon }}" alt="">
                            </div>
                            <div class="content">
                                <h2>{{ $offer->title }}</h2>
                                <p>{{ $offer->description }}</p>
                            </div>
                        </div>
                        <div class="right__table">
                            <div class="dropdown">
                                <span class=" dropdown-toggle" type="button" id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown" aria-expanded="true">
                                    <i class="fa-solid fa-ellipsis"></i>
                                </span>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item"
                                            href="{{ route('admin.update-offer', ['id' => $offer->id]) }}">Edit</a>
                                    </li>
                                    <li><a class="dropdown-item" wire:click.prevent='delete({{ $offer->id }})'
                                            href="#">Delete</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @empty
                    <h1>Record not found</h1>
                @endforelse
            </div>
        </div>
    </div>

</div>
