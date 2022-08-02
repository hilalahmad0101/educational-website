<div>
    <x-slot name="title">Contact US</x-slot>
    <div class="container">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="main__page">
            <i class="fa-solid fa-house-user"></i> <span> > Enquerie</span>
        </div>

        <div class="main__page__content">
            <div class="main__heading">
                <div class="main__left">
                    <h1 class="main__left__h1">Enquerie</h1>
                    <p class="main__left__p">Here will be show some user request.</p>
                </div>
            </div>
            <div class="main__page__form">
                <div class="table-responsive w-100">
                    <table class="table">
                        <tbody style="vertical-align: middle">
                            <thead>
                                <tr>
                                    <td>No</td>
                                    <td>Name</td>
                                    <td>Email</td>
                                    <td>Phone number</td>
                                    <td>Preffered course</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            @forelse ($contacts as $contact)
                                <tr>
                                    <td>
                                        <p>{{ $contact->id }}</p>
                                    </td>
                                    <td>
                                        <p>{{ $contact->name }}</p>
                                    </td>
                                    <td>
                                        <p>{{ $contact->email }}</p>
                                    </td>
                                    <td>
                                        <p>+9839843993</p>
                                    </td>
                                    <td>
                                        <p>{{ $contact->p_course }}</p>
                                    </td>
                                    <td class="d-flex align-content-center">
                                        <p class="action1"><i class="fa-solid fa-check"></i></p>
                                        <p class="action2"><i class="fa-solid fa-trash"></i></p>
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
