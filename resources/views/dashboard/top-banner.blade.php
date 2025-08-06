@extends('dashboard.layouts')

@section('content')
    <div class="container mt-4">

        <div class="card shadow-sm p-4">
            <div class="card-header bg-success text-white fw-semibold">
                <i class="fas fa-plus-circle me-2"></i> Top Banner Settings
            </div>
            <form action="{{ route('top-banner.update', 'banner_image') }}" method="POST" enctype="multipart/form-data"
                class="mb-3">
                @csrf
                <label>Banner Image (1920x1280)</label>
                <input type="file" name="value" class="form-control">
                @if (!empty($data['banner_image']))
                    <img src="{{ asset($data['banner_image']) }}" class="mt-2" style="max-width: 400px;">
                @endif
                <button class="btn btn-success mt-2">Update Image</button>
                @error('value')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </form>

            @foreach (['banner_title' => 'Title', 'banner_subtitle' => 'Subtitle', 'banner_description' => 'Description'] as $field => $label)
                <form action="{{ route('top-banner.update', $field) }}" method="POST" class="mb-3">
                    @csrf
                    <label>{{ $label }}</label>
                    @if ($field === 'banner_description')
                        <textarea name="value" class="form-control" rows="3">{{ old('value', $data[$field] ?? '') }}</textarea>
                    @else
                        <input type="text" name="value" class="form-control"
                            value="{{ old('value', $data[$field] ?? '') }}">
                    @endif
                    <button class="btn btn-primary mt-2">Update {{ $label }}</button>
                    @error('value')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </form>
            @endforeach

            @if (session('success'))
                <div class="alert alert-success mt-2">{{ session('success') }}</div>
            @endif
        </div>
    </div>
@endsection
