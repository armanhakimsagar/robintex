@extends('dashboard.layouts')

@section('content')
    <script src="https://cdn.ckeditor.com/4.25.1/standard/ckeditor.js"></script>

    <div class="container mt-5" style="max-width: 800px;">
        <!-- Page Header -->


        <!-- Add New Feature Form -->
        <div class="card shadow-sm mb-5">
            <div class="card-header bg-info text-white fw-semibold">
                <i class="fas fa-plus-circle me-2"></i> Add New Top Feature
            </div>
            <div class="card-body">
                <form action="{{ route('top-feature.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" value="{{ old('title') }}">
                        @error('title')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Short Description</label>
                        <input type="text" name="short_description" class="form-control"
                            value="{{ old('short_description') }}">
                        @error('short_description')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Long Description</label>
                        <textarea name="long_description" class="form-control" rows="5">{{ old('long_description') }}</textarea>
                        @error('long_description')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Icon (50x50)</label>
                        <input type="file" name="icon" class="form-control">
                        @error('icon')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-plus me-1"></i> Add Feature
                    </button>
                </form>
            </div>
        </div>

        <!-- All Features List -->
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white fw-semibold">
                <i class="fas fa-list me-2"></i> All Top Features
            </div>
            <div class="card-body">
                @foreach ($features as $feature)
                    <form action="{{ route('top-feature.update', $feature->id) }}" method="POST"
                        enctype="multipart/form-data" class="border-bottom pb-3 mb-3">
                        @csrf
                        @method('PUT')

                        <div class="row align-items-end">
                            <div class="col-md-3">
                                <label class="form-label">Title</label>
                                <input type="text" name="title" class="form-control"
                                    value="{{ old('title', $feature->title) }}">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Short Description</label>
                                <input type="text" name="short_description" class="form-control"
                                    value="{{ old('short_description', $feature->short_description) }}">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Long Description</label>
                                <textarea name="long_description" class="form-control" rows="3">{{ old('long_description', $feature->long_description) }}</textarea>
                            </div>
                            <div class="col-md-1 text-center">
                                <label class="form-label">Icon</label><br>
                                @if ($feature->icon)
                                    <img src="{{ asset('uploads/' . $feature->icon) }}" width="50" height="50"
                                        class="rounded shadow-sm mb-1">
                                @endif
                                <input type="file" name="icon" class="form-control form-control-sm">
                            </div>
                            <div class="col-md-2 mt-4">
                                <button class="btn btn-primary w-100 mb-1" type="submit">
                                    <i class="fas fa-save me-1"></i> Update
                                </button>
                                <a href="{{ route('top-element.destroy', $feature->id) }}"
                                    onclick="return confirm('Are you sure?')" class="btn btn-danger w-100">
                                    <i class="fas fa-trash me-1"></i> Delete
                                </a>
                            </div>
                        </div>
                        @error('title')
                            <small class="text-danger d-block">{{ $message }}</small>
                        @enderror
                        @error('short_description')
                            <small class="text-danger d-block">{{ $message }}</small>
                        @enderror
                        @error('long_description')
                            <small class="text-danger d-block">{{ $message }}</small>
                        @enderror
                        @error('icon')
                            <small class="text-danger d-block">{{ $message }}</small>
                        @enderror
                    </form>
                @endforeach
            </div>
        </div>

        @if (session('success'))
            <div class="alert alert-success mt-4">
                <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
            </div>
        @endif
    </div>

    <script>
        CKEDITOR.replaceAll('textarea');
    </script>
@endsection
