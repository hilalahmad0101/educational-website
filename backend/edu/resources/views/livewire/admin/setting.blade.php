<div>
    <x-slot name="title">Setting</x-slot>
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 my-3">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('admin.update-profile') }}" class="nav-link text-black">Update Profile</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 my-3">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('admin.change-password') }}" class="nav-link text-black">Change Password</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
