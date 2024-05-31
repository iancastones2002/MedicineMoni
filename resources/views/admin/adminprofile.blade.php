@extends('layouts.admin')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <!-- Page title -->
            <div class="my-5">
                <h3>My Profile</h3>
                <hr>
            </div>
            <!-- Form START -->
            <form class="file-upload">
                <div class="row mb-5 gx-5">
                    <!-- Contact detail -->
                    <div class="col-xxl-8 mb-5 mb-xxl-0">
                        <div class="bg-secondary-soft px-4 py-5 rounded">
                            <div class="row g-3">
                                <h4 class="mb-4 mt-0">Contact Detail</h4>
                                <!-- Full Name -->
                                <div class="col-md-6">
                                    <label class="form-label">Full name</label>
                                    <input type="text" class="form-control" placeholder="Full name" aria-label="Full name">
                                </div>
                                <!-- Username -->
                                <div class="col-md-6">
                                    <label class="form-label">Username</label>
                                    <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                                </div>
                                <!-- Email -->
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Change password -->
                    <div class="col-xxl-6">
                        <div class="bg-secondary-soft px-4 py-5 rounded">
                            <div class="row g-3">
                                <h4 class="my-4">Change Password</h4>
                                <!-- Old password -->
                                <div class="col-md-6">
                                    <label for="exampleInputPassword1" class="form-label">Old password </label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Old password">
                                </div>
                                <!-- New password -->
                                <div class="col-md-6">
                                    <label for="exampleInputPassword2" class="form-label">New password </label>
                                    <input type="password" class="form-control" id="exampleInputPassword2" placeholder="New password">
                                </div>
                                <!-- Confirm password -->
                                <div class="col-md-12">
                                    <label for="exampleInputPassword3" class="form-label">Confirm Password </label>
                                    <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Confirm password">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Button -->
                <div class="gap-3 d-md-flex justify-content-md-end text-center">
                    <button type="button" class="btn btn-danger btn-lg">Delete profile</button>
                    <button type="button" class="btn btn-primary btn-lg">Update profile</button>
                </div>
            </form> <!-- Form END -->
        </div>
    </div>
</div>

@endsection
