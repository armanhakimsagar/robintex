@extends('dashboard.layouts')

@section('content')
    <div class="container mt-5" style="max-width: 800px;">
        <div class="card shadow rounded p-4">
            <div class="card-header bg-info text-white fw-semibold">
                <i class="fas fa-bullseye me-2"></i> Top Elements
            </div>

            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            {{-- Fetch data --}}
            @php
                $fields = [
                    'email' => 'Email Address',
                    'phone' => 'Phone Number',
                    'address' => 'Address',
                    'facebook' => 'Facebook URL',
                    'linkedin' => 'LinkedIn URL',
                ];
                $data = \App\Models\TopElement::pluck('value', 'key')->toArray();
            @endphp

            @foreach ($fields as $field => $label)
                <form action="{{ route('top-elements.update', $field) }}" method="POST" class="mb-4">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label fw-bold">{{ $label }}</label>
                        <input type="text" name="value"
                            class="form-control @error('value_' . $field) is-invalid @enderror"
                            value="{{ old('value_' . $field, $data[$field] ?? '') }}"
                            placeholder="Enter {{ strtolower($label) }}">
                        @error('value_' . $field)
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-outline-primary btn-sm">Update {{ ucfirst($field) }}</button>
                </form>
                <hr>
            @endforeach

            {{-- Logo Upload --}}
            <form action="{{ route('top-elements.update', 'logo') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label fw-bold">Logo (width 350px / height 70px)</label>
                    <input type="file" name="value" class="form-control @error('value_logo') is-invalid @enderror">
                    @error('value_logo')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    @if (!empty($data['logo']))
                        <div class="mt-3">
                            <img src="{{ asset('storage/' . $data['logo']) }}" alt="Logo" width="150"
                                class="img-thumbnail">
                        </div>
                    @endif
                </div>
                <button type="submit" class="btn btn-outline-primary btn-sm">Update Logo</button>
            </form>
        </div>
    </div>
@endsection
