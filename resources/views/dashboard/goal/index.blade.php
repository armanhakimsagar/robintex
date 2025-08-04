{{-- resources/views/dashboard/goal/index.blade.php --}}
@extends('dashboard.layouts')

@section('content')
<div class="container mt-4">
    <h4 class="mb-4">Add New Goal</h4>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- Add New Goal --}}
    <form action="{{ route('goal.store') }}" method="POST" enctype="multipart/form-data" class="shadow p-4 mb-5 bg-white rounded">
        @csrf
        <div class="mb-3">
            <label>Icon (50x50)</label>
            <input type="file" name="icon" class="form-control">
        </div>
        <div class="mb-3">
            <input type="text" name="title" class="form-control" placeholder="Title" required>
        </div>
        <div class="mb-3">
            <input type="text" name="short_description" class="form-control" placeholder="Short Description" required>
        </div>
        <div class="mb-3">
            <textarea name="long_description" class="form-control rich-text" placeholder="Long Description"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Add Goal</button>
    </form>

    {{-- List of Goals --}}
    <h4>All Goals</h4>
    @foreach($goals as $goal)
        <form action="{{ route('goal.update', $goal) }}" method="POST" enctype="multipart/form-data" class="shadow p-4 mb-4 bg-light rounded">
            @csrf
            <div class="mb-3">
                <label>Current Icon:</label><br>
                <img src="{{ asset('storage/' . $goal->icon) }}" width="50" height="50">
                <input type="file" name="icon" class="form-control mt-2">
            </div>
            <div class="mb-3">
                <input type="text" name="title" value="{{ $goal->title }}" class="form-control" placeholder="Title" required>
            </div>
            <div class="mb-3">
                <input type="text" name="short_description" value="{{ $goal->short_description }}" class="form-control" placeholder="Short Description" required>
            </div>
            <div class="mb-3">
                <textarea name="long_description" class="form-control rich-text">{{ $goal->long_description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="#" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $goal->id }}').submit();" class="btn btn-danger">Delete</a>
        </form>

        <form id="delete-form-{{ $goal->id }}" action="{{ route('goal.destroy', $goal) }}" method="POST" style="display: none;">
            @csrf
            @method('DELETE')
        </form>
    @endforeach
</div>
@endsection

@push('scripts')
<script src="https://cdn.ckeditor.com/4.25.1-lts/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replaceAll('rich-text');
</script>
@endpush
