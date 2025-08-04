@extends('dashboard.layouts')

@section('content')
<div class="container mt-4">
    <h4 class="mb-4">Our Missions</h4>

    {{-- Add New Mission --}}
    <form action="{{ route('missions.store') }}" method="POST" enctype="multipart/form-data" class="mb-5 shadow p-4 bg-white rounded">
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
    @foreach($missions as $mission)
    <div class="mb-4 shadow p-4 bg-light rounded">
        <form action="{{ route('missions.update', $mission->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row align-items-center mb-2">
                <div class="col-md-1">
                    @if($mission->icon)
                        <img src="{{ asset('uploads/missions/' . $mission->icon) }}" width="50" height="50" alt="icon">
                    @endif
                </div>
                <div class="col-md-3">
                    <input type="file" name="icon" class="form-control form-control-sm">
                </div>
                <div class="col-md-3">
                    <input type="text" name="title" value="{{ $mission->title }}" class="form-control form-control-sm">
                </div>
                <div class="col-md-3">
                    <input type="text" name="short_description" value="{{ $mission->short_description }}" class="form-control form-control-sm">
                </div>
                <div class="col-md-12 mt-2">
                    <textarea name="long_description" class="form-control rich-text">{{ $mission->long_description }}</textarea>
                </div>
                <div class="col-md-12 mt-2 d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary btn-sm">Update</button>
                    <form action="{{ route('missions.destroy', $mission->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </div>
            </div>
        </form>
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
