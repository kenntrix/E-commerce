@extends('layouts.admin')

@section('admin-content')
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
            <div class="card shadow-lg rounded-3 p-4">
                <div class="text-center mb-4">
                    <img class="rounded-circle border border-dark" width="120px" height="120px" 
                        src="{{ auth()->user()->picture }}" alt="Profile Picture">
                    <h4 class="mt-3">{{ auth()->user()->fullname }}</h4>
                    <p class="text-muted">Edit your profile details</p>
                </div>

                <form action="{{ route('profile.edit') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')

                    <div class="mb-3">
                        <label class="fw-bold">Full Name</label>
                        <input type="text" name="fullname" class="form-control rounded @error('fullname') border border-danger @enderror"
                            value="{{ auth()->user()->fullname }}" placeholder="Full Name">
                        @error('fullname')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="fw-bold">Email</label>
                        <input type="email" name="email" class="form-control rounded @error('email') border border-danger @enderror"
                            value="{{ auth()->user()->email }}" placeholder="Email">
                        @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="fw-bold">Profile Picture</label>
                        <input type="file" name="picture" class="form-control rounded @error('picture') border border-danger @enderror">
                        @error('picture')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-success rounded-pill">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
