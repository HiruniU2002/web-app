@extends('admin.layouts.master')

@section('content')

<div class="min-vh-100 bg-light py-5">
    <div class="container" style="max-width: 800px;">
        <!-- Header -->
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold text-dark mb-3">
                Hello, {{ Auth::user()->name }}
            </h2>
            <p class="lead text-muted">Update your profile details below</p>
        </div>

        @if(session('success'))
            <div class="mb-4 p-4 alert alert-success alert-dismissible fade show">
                <p class="mb-0">{{ session('success') }}</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <!-- Profile Card -->
        <div class="card shadow-sm mb-5">
            <div class="card-body p-4 p-md-5">

                <!-- Main Form -->
                <form method="POST" action="/profileUpdate">
                    @csrf
                    @method('PUT')

                    <!-- Personal Information Section -->
                    <div class="mb-4">
                        <h3 class="h4 fw-semibold text-dark mb-4 pb-2 border-bottom d-flex align-items-center">
                            <i class="bi bi-person me-2"></i>
                            Personal Information
                        </h3>
                    </div>

                    <!-- Form Fields -->
                    <div class="row g-3 mb-4">
                        <div class="col-md-6">
                            <label for="first_name" class="form-label d-flex align-items-center">
                                <i class="bi bi-person me-1"></i>
                                Name
                            </label>
                            <input 
                                type="text" 
                                id="name" 
                                name="name" 
                                value="{{ old('name', $user->name) }}"
                                class="form-control"
                            >
                            @error('name')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="email" class="form-label d-flex align-items-center">
                            <i class="bi bi-envelope me-1"></i>
                            Email Address
                        </label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            value="{{ old('email', $user->email) }}"
                            class="form-control"
                        >
                        @error('email')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="phone" class="form-label d-flex align-items-center">
                            <i class="bi bi-telephone me-1"></i>
                            Phone Number
                        </label>
                        <input 
                            type="tel" 
                            id="phone" 
                            name="phone" 
                            value="{{ old('phone', $user->phone) }}"
                            class="form-control"
                        >
                        @error('phone')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="address" class="form-label d-flex align-items-center">
                            <i class="bi bi-geo-alt me-1"></i>
                            Address
                        </label>
                        <textarea 
                            id="address" 
                            name="address" 
                            rows="3"
                            class="form-control"
                        >{{ old('address', $user->address) }}</textarea>
                        @error('address')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-end gap-3 pt-3">
                        <button 
                            type="button" 
                            onclick="window.location.reload()"
                            class="btn btn-outline-secondary"
                        >
                            Cancel
                        </button>
                        <button 
                            type="submit" 
                            class="btn btn-dark"
                        >
                            Save Changes
                        </button>
                    </div>
                </form>

                <!-- Password Section -->
                <div class="mt-5 pt-4 border-top">
                    <h3 class="h4 fw-semibold text-dark mb-4 d-flex align-items-center">
                        <i class="bi bi-lock me-2"></i>
                        Change Password
                    </h3>
                    
                    <form method="POST" action="{{ route('profile.password.update') }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="current_password" class="form-label d-flex align-items-center">
                                <i class="bi bi-key me-1"></i>
                                Current Password
                            </label>
                            <input 
                                type="password" 
                                id="current_password" 
                                name="current_password" 
                                class="form-control"
                            >
                            @error('current_password')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <label for="password" class="form-label d-flex align-items-center">
                                    <i class="bi bi-key me-1"></i>
                                    New Password
                                </label>
                                <input 
                                    type="password" 
                                    id="password" 
                                    name="password" 
                                    class="form-control"
                                >
                                @error('password')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="password_confirmation" class="form-label d-flex align-items-center">
                                    <i class="bi bi-check-circle me-1"></i>
                                    Confirm Password
                                </label>
                                <input 
                                    type="password" 
                                    id="password_confirmation" 
                                    name="password_confirmation" 
                                    class="form-control"
                                >
                            </div>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button 
                                type="submit" 
                                class="btn btn-dark">
                                Update Password
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection