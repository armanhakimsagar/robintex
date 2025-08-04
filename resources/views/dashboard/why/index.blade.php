@extends('dashboard.layouts')

@section('content')
<div class="container mt-4">
    <h4>Why Choose Us</h4>

    @if(session('success'))
        <div class="alert alert-success mt-2">{{ session('success') }}</div>
    @endif

    {{-- Main Section --}}
    <form action="{{ route('why.update') }}" method="POST">
        @csrf
        <div class="card shadow p-4 mb-4">
            <div class="mb-3">
                <label>Title</label>
                <input type="text" name="title" class="form-control" value="{{ old('title', $why->title ?? '') }}">
            </div>
            <div class="mb-3">
                <label>Description</label>
                <textarea name="description" id="editor1" class="form-control" rows="5">{{ old('description', $why->description ?? '') }}</textarea>
            </div>
            <button class="btn btn-success"  style="width:200px">Update Main Section</button>
        </div>
    </form>

    {{-- Add Reason --}}
    <h5>Add Reason</h5>
    <form action="{{ route('why.reason.store') }}" method="POST" enctype="multipart/form-data" class="card p-4 shadow mb-4">
        @csrf
        <div class="mb-2"><input type="text" name="title" class="form-control" placeholder="Reason Title"></div>
        <div class="mb-2"><input type="text" name="short_description" class="form-control" placeholder="Short Description"></div>
        <div class="mb-2"><textarea name="long_description" class="form-control" rows="4" placeholder="Long Description"></textarea></div>
        <div class="mb-2">
            <label>Icon (50x50)</label>
            <input type="file" name="icon" class="form-control">
        </div>
        <button class="btn btn-primary" style="width:200px">Add Reason</button>
    </form>

    {{-- List of Reasons --}}
    <h5>Reason List</h5>
    <h5>Reason List</h5>

    @foreach ($reasons as $reason)
        <form action="{{ route('why.reason.update', $reason->id) }}" method="POST" enctype="multipart/form-data" class="card p-4 shadow mb-3">
            @csrf
            <div class="mb-2">
                <input type="text" name="title" class="form-control" value="{{ $reason->title }}" placeholder="Title">
            </div>
            <div class="mb-2">
                <input type="text" name="short_description" class="form-control" value="{{ $reason->short_description }}" placeholder="Short Description">
            </div>
            <div class="mb-2">
                <textarea name="long_description" class="form-control" placeholder="Long Description">{{ $reason->long_description }}</textarea>
            </div>
            <div class="mb-2">
                @if($reason->icon)
                    <img src="{{ asset('storage/' . $reason->icon) }}" height="50" width="50" class="mb-2 rounded">
                @endif
                <input type="file" name="icon" class="form-control">
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-warning" style="width:200px">Update</button>
                
                <form action="{{ route('why.reason.delete', $reason->id) }}" method="POST" 
                    onsubmit="return confirm('Are you sure to delete?')" class="m-0">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" style="width:200px">Delete</button>
                </form>
            </div>
        </form>
    @endforeach

</div>
@endsection

@section('scripts')
<script src="https://cdn.ckeditor.com/4.25.1-lts/standard/ckeditor.js"></script>
<script> CKEDITOR.replace('editor1'); </script>
@endsection
