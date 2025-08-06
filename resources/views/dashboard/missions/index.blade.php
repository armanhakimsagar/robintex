@extends('dashboard.layouts')

@section('content')
    <div class="container mt-5" style="max-width: 800px;">
        <div class="card-header bg-info text-white fw-semibold">
            <i class="fas fa-bullseye me-2"></i>Our Missions
        </div>
        {{-- Add New Mission --}}
        <form action="{{ route('missions.store') }}" method="POST" enctype="multipart/form-data"
            class="mb-5 shadow p-4 bg-white rounded">
            @csrf
            <div class="mb-3">
                <label>Icon (50x50)</label>
                <input type="file" name="icon" class="form-control">
            </div>
            <div class="mb-3">
                <label>Title</label>
                <input type="text" name="title" class="form-control" placeholder="Enter title">
            </div>
            <div class="mb-3">
                <label>Short Description</label>
                <input type="text" name="short_description" class="form-control" placeholder="Short description">
            </div>
            <div class="mb-3">
                <label>Long Description</label>
                <textarea name="long_description" class="form-control rich-text" placeholder="Detailed description"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Add Mission</button>
        </form>

        {{-- List Existing Missions --}}
        @foreach ($missions as $mission)
            <div class="mb-4 shadow p-4 bg-light rounded">
                <div class="row align-items-center mb-2">
                    {{-- Update Form --}}
                    <form action="{{ route('missions.update', $mission->id) }}" method="POST" enctype="multipart/form-data"
                        class="col-12">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-1">
                                @if ($mission->icon)
                                    <img src="{{ asset($mission->icon) }}" width="50" height="50" alt="icon">
                                @endif
                            </div>
                            <div class="col-md-3">
                                <input type="file" name="icon" class="form-control form-control-sm">
                            </div>
                            <div class="col-md-3">
                                <input type="text" name="title" value="{{ $mission->title }}"
                                    class="form-control form-control-sm">
                            </div>
                            <div class="col-md-3">
                                <input type="text" name="short_description" value="{{ $mission->short_description }}"
                                    class="form-control form-control-sm">
                            </div>
                            <div class="col-md-12 mt-2">
                                <textarea name="long_description" class="form-control rich-text">{{ $mission->long_description }}</textarea>
                            </div>
                            <div class="col-md-12 mt-2 d-flex justify-content-between">
                                <button type="submit" class="btn btn-primary btn-sm">Update</button>
                            </div>
                        </div>
                    </form>

                    {{-- Delete Form --}}
                    <div class="col-12 mt-2 text-end">
                        <form action="{{ route('missions.destroy', $mission->id) }}" method="POST"
                            onsubmit="return confirm('Are you sure you want to delete this mission?');"
                            style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

@section('scripts')
    {{-- CKEditor --}}
    <script src="https://cdn.ckeditor.com/4.25.1/standard/ckeditor.js"></script>
    <script>
        document.querySelectorAll('.rich-text').forEach((el) => {
            CKEDITOR.replace(el);
        });
    </script>
@endsection
