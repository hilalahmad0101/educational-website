<div>
    <x-slot name="title">
        University
    </x-slot>
    <div class="container">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="main__page">
            <i class="fa-solid fa-house-user"></i> <span> > University</span>
        </div>

        <div class="main__page__content">
            <div class="main__heading">
                <div class="main__left">
                    <h1 class="main__left__h1">Add University</h1>
                    <p class="main__left__p">Include a service what you are offer</p>
                </div>
                <div class="main__right">
                    <p class="main__right__add">Add University</p>
                    <button class="main__right__btn">
                        <a href="{{ route('admin.add-university') }}"> <i class="fa-solid fa-plus"></i></a>
                    </button>
                </div>
            </div>
            <div class="main__page__form">
                <div class="table-responsive w-100">
                    <table class="table">
                        {{-- <thead>
                            <tr>
                                <th>#</th>
                                <th>Icon</th>
                                <th>Title & Description</th>
                                <th>Action</th>
                            </tr>
                        </thead> --}}
                        <tbody style="vertical-align: middle">
                            @forelse ($universities as $university)
                                <tr>
                                    <td>{{ $university->id }}</td>
                                    <td><img src="{{ asset('storage') }}/{{ $university->image }}" width="50"
                                            height="50" alt=""></td>
                                    <td>
                                        <h3 class="table__main__page__h3">{{ $university->title }}</h3>
                                        <p class="table__main__page__p">{{ $university->description }}</p>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <span class=" dropdown-toggle" type="button" id="dropdownMenuButton1"
                                                data-bs-toggle="dropdown" aria-expanded="true">
                                                <i class="fa-solid fa-ellipsis"></i>
                                            </span>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item"
                                                        href="{{ route('admin.update-university', ['id' => $university->id]) }}">Edit</a>
                                                </li>
                                                <li><a class="dropdown-item"
                                                        wire:click.prevent='delete({{ $university->id }})'
                                                        href="#">Delete</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <h1>Record not found</h1>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
