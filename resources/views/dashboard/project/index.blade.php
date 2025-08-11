@extends('dashboard.layouts')

@section('content')

    {{-- Validation Errors --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container mt-5" style="max-width: 800px;">
        {{-- Header --}}
        <div class="card-header bg-info text-white fw-semibold">
            <i class="fas fa-bullseye me-2"></i> Manufacturing Capabilities
        </div>
        {{-- Success Message --}}
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        {{-- Add Project --}}
        <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data" class="card p-4 shadow mb-4">
            @csrf
            <h5 class="mb-3">Add Manufacturing Capabilities</h5>
            <div class="mb-2">
                <input type="text" name="title" class="form-control" placeholder="Project Title" required>
            </div>
            <div class="mb-2">
                <input type="text" name="short_description" class="form-control" placeholder="Short Description"
                    required>
            </div>
            <div class="mb-2">
                <textarea name="long_description" id="editor" class="form-control" placeholder="Long Description"></textarea>
            </div>
            <div class="mb-2">
                <label>Project Image (250x250)</label>
                <input type="file" name="image" class="form-control">
            </div>
            <button class="btn btn-primary" style="width:200px">Add Project</button>
        </form>

        {{-- Project List --}}
        <div class="card-header bg-info text-white fw-semibold">
            <i class="fas fa-bullseye me-2"></i> Manufacturing Capabilities List
        </div>
        @foreach ($projects as $project)
            <div class="card p-4 shadow mb-3">
                <form action="{{ route('projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-2">
                        <input type="text" name="title" class="form-control" value="{{ $project->title }}" required>
                    </div>
                    <div class="mb-2">
                        <input type="text" name="short_description" class="form-control"
                            value="{{ $project->short_description }}" required>
                    </div>
                    <div class="mb-2">
                        <textarea name="long_description" class="form-control" rows="4">{{ $project->long_description }}</textarea>
                    </div>
                    <div class="mb-2">
                        @if ($project->image)
                            <img src="{{ asset('storage/' . $project->image) }}" height="80" width="80"
                                class="rounded mb-2">
                        @endif
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-warning" style="width:200px">Update</button>
                </form>
                {{-- Separate Delete Form --}}
                <form action="{{ route('projects.destroy', $project->id) }}" method="POST"
                    onsubmit="return confirm('Are you sure?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" style="width:200px">Delete</button>
                </form>
            </div>
    </div>
    @endforeach
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.ckeditor.com/4.25.1-lts/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor');
    </script>
@endsection
