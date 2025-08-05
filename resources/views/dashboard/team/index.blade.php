@extends('dashboard.layouts')

@section('content')
<div class="container mt-4">
    <h4 class="mb-4">Team Members</h4>
    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if($errors->any())
        <div class="alert alert-danger">{{ implode(', ', $errors->all()) }}</div>
    @endif


    {{-- Add Form --}}
    <form action="{{ route('team.store') }}" method="POST" enctype="multipart/form-data" class="card p-4 shadow mb-4">
        @csrf
        <h5 class="mb-3">Add Team Member</h5>

        <input type="text" name="name" class="form-control mb-2" placeholder="Name" required>
        <input type="text" name="designation" class="form-control mb-2" placeholder="Designation" required>

        <label>Image (300x300)</label>
        <input type="file" name="image" class="form-control mb-3" required>

        <button class="btn btn-primary w-100">Add Member</button>
    </form>

    {{-- List --}}
    @foreach ($teams as $team)
        <form action="{{ route('team.update', $team->id) }}" method="POST" enctype="multipart/form-data" class="card p-4 shadow mb-4">
            @csrf
            @method('PUT')

            <input type="text" name="name" class="form-control mb-2" value="{{ $team->name }}" required>
            <input type="text" name="designation" class="form-control mb-2" value="{{ $team->designation }}" required>

            @if($team->image)
                <img src="{{ asset('storage/' . $team->image) }}" width="100" height="100" class="mb-2 rounded">
            @endif
            <input type="file" name="image" class="form-control mb-3">

            <div class="d-flex gap-2">
                <button class="btn btn-warning w-100" style="max-width: 200px;">Update</button>

                <form action="{{ route('team.destroy', $team->id) }}" method="POST" onsubmit="return confirm('Are you sure?')" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger w-100" style="max-width: 200px;">Delete</button>
                </form>
            </div>
        </form>
    @endforeach
</div>
@endsection
