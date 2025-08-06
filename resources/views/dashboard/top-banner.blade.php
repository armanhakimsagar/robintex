@extends('dashboard.layouts')

@section('content')
    <div class="container mt-5" style="max-width: 800px;">
        <div class="card shadow-sm p-4">
            <div class="card-header bg-info text-white fw-semibold">
                <i class="fas fa-image me-2"></i> Top Banner Settings
            </div>

            {{-- Banner Image --}}
            <form action="{{ route('top-banner.update', 'banner_image') }}" method="POST" enctype="multipart/form-data"
                class="mb-3">
                @csrf
                <label for="value_banner_image">Banner Image (1920x1280)</label>
                <input type="file" name="value" class="form-control" id="value_banner_image">

                @if (!empty($data['banner_image']))
                    <img src="{{ asset($data['banner_image']) }}" class="mt-2" style="max-width: 400px;">
                @endif

                @error('value_banner_image')
                    <small class="text-danger">{{ $message }}</small>
                @enderror

                <button class="btn btn-success mt-2">Update Image</button>
            </form>

            {{-- Banner Title --}}
            <form action="{{ route('top-banner.update', 'banner_title') }}" method="POST" class="mb-3">
                @csrf
                <label for="value_banner_title">Title</label>
                <input type="text" name="value" class="form-control" id="value_banner_title"
                    value="{{ old('value', $data['banner_title'] ?? '') }}">

                @error('value_banner_title')
                    <small class="text-danger">{{ $message }}</small>
                @enderror

                <button class="btn btn-primary mt-2">Update Title</button>
            </form>

            {{-- Banner Subtitle --}}
            <form action="{{ route('top-banner.update', 'banner_subtitle') }}" method="POST" class="mb-3">
                @csrf
                <label for="value_banner_subtitle">Subtitle</label>
                <input type="text" name="value" class="form-control" id="value_banner_subtitle"
                    value="{{ old('value', $data['banner_subtitle'] ?? '') }}">

                @error('value_banner_subtitle')
                    <small class="text-danger">{{ $message }}</small>
                @enderror

                <button class="btn btn-primary mt-2">Update Subtitle</button>
            </form>

            {{-- Banner Description --}}
            <form action="{{ route('top-banner.update', 'banner_description') }}" method="POST" class="mb-3">
                @csrf
                <label for="value_banner_description">Description</label>
                <textarea name="value" class="form-control" id="value_banner_description" rows="3">{{ old('value', $data['banner_description'] ?? '') }}</textarea>

                @error('value_banner_description')
                    <small class="text-danger">{{ $message }}</small>
                @enderror

                <button class="btn btn-primary mt-2">Update Description</button>
            </form>

            {{-- Success Alert --}}
            @if (session('success'))
                <div class="alert alert-success mt-2">{{ session('success') }}</div>
            @endif
        </div>
    </div>
@endsection
