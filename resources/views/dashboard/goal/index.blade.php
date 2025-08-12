@extends('dashboard.layouts')

@section('content')
    <div class="container mt-5" style="max-width: 800px;">
        {{-- Page Header --}}
        <div class="card-header bg-info text-white fw-semibold">
            QC Process Management
        </div>

        {{-- Success Message --}}
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        {{-- Add New Goal Form --}}
        <form action="{{ route('goal.store') }}" method="POST" enctype="multipart/form-data"
            class="shadow p-4 mb-5 bg-white rounded">
            @csrf
            <div class="mb-3">
                <label class="form-label">Icon (50x50)</label>
                <input type="file" name="icon" class="form-control">
            </div>
            <div class="mb-3">
                <input type="text" name="title" class="form-control" placeholder="Title" required>
            </div>
            <div class="mb-3">
                <input type="text" name="short_description" class="form-control" placeholder="Short Description"
                    required>
            </div>
            <div class="mb-3">
                <textarea name="long_description" class="form-control rich-text" placeholder="Long Description"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Add QC Process</button>
        </form>

        {{-- All Goals List --}}
        <div class="card-header bg-info text-white fw-semibold">
            All QC Process
        </div>

        @foreach ($goals as $goal)
            <form action="{{ route('goal.update', $goal) }}" method="POST" enctype="multipart/form-data"
                class="shadow p-4 mb-4 bg-light rounded">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Current Icon:</label><br>
                    <img src="{{ asset('storage/' . $goal->icon) }}" width="50" height="50" class="mb-2">
                    <input type="file" name="icon" class="form-control mt-2">
                </div>
                <div class="mb-3">
                    <input type="text" name="title" value="{{ $goal->title }}" class="form-control"
                        placeholder="Title" required>
                </div>
                <div class="mb-3">
                    <input type="text" name="short_description" value="{{ $goal->short_description }}"
                        class="form-control" placeholder="Short Description" required>
                </div>
                <div class="mb-3">
                    <textarea name="long_description" class="form-control rich-text">{{ $goal->long_description }}</textarea>
                </div>
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="#"
                        onclick="event.preventDefault(); document.getElementById('delete-form-{{ $goal->id }}').submit();"
                        class="btn btn-danger">Delete</a>
                </div>
            </form>

            {{-- Hidden Delete Form --}}
            <form id="delete-form-{{ $goal->id }}" action="{{ route('goal.destroy', $goal) }}" method="POST"
                style="display: none;">
                @csrf
                @method('DELETE')
            </form>
        @endforeach
    </div>
@endsection

@push('scripts')
    {{-- CKEditor --}}
    <script src="https://cdn.ckeditor.com/4.25.1-lts/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replaceAll('rich-text');
    </script>
@endpush
