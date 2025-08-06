@extends('dashboard.layouts')

@section('content')
    <div class="container mt-5 d-flex justify-content-center">
        <div class="card shadow-sm p-4" style="max-width: 500px; width: 100%;">
            <div class="card-header bg-info text-white fw-semibold">
                <i class="fas fa-bullseye me-2"></i> Change Password
            </div>
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            <form method="POST" action="{{ route('password.change') }}">
                @csrf


                <div class="mb-3">
                    <label for="new_password" class="form-label fw-semibold">New Password</label>
                    <input type="password" id="new_password" name="new_password"
                        class="form-control form-control-lg @error('new_password') is-invalid @enderror" required>
                    @error('new_password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="new_password_confirmation" class="form-label fw-semibold">Confirm New Password</label>
                    <input type="password" id="new_password_confirmation" name="new_password_confirmation"
                        class="form-control form-control-lg" required>
                </div>

                <button type="submit" class="btn btn-primary w-100 fw-semibold py-2">Change Password</button>
            </form>
        </div>
    </div>
@endsection
