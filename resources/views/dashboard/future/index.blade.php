@extends('dashboard.layouts')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="mb-0">🚀 Our Future</h4>
        <a href="#addFutureForm" class="btn btn-sm btn-success">+ Add New Future</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- Add Form --}}
    <form id="addFutureForm" action="{{ route('future.store') }}" method="POST" enctype="multipart/form-data" class="card p-4 shadow mb-4">
        @csrf
        <h5 class="mb-3">Create New Future</h5>

        <input type="text" name="title" class="form-control mb-2" placeholder="Title" required>
        <input type="text" name="short_description" class="form-control mb-2" placeholder="Short Description" required>

        <label>Long Description</label>
        <textarea name="long_description" id="editor" class="form-control mb-2" placeholder="Long Description"></textarea>

        <label>Future Image (700x800)</label>
        <input type="file" name="image" class="form-control mb-3">

        <div id="count-group">
            <div class="d-flex gap-2 mb-2">
                <input type="number" name="counts[0][count]" class="form-control" placeholder="Count" required>
                <input type="text" name="counts[0][title]" class="form-control" placeholder="Count Title" required>
            </div>
        </div>

        <button type="button" class="btn btn-sm btn-secondary mb-3" onclick="addCount()" style="width:200px">+ Add Count</button>

        <button class="btn btn-primary" style="width:200px">Add Future</button>
    </form>

    {{-- List --}}
    @foreach ($futures as $future)
        <div class="card p-4 shadow mb-4">
            <form action="{{ route('future.update', $future->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="text" name="title" class="form-control mb-2" value="{{ $future->title }}" required>
                <input type="text" name="short_description" class="form-control mb-2" value="{{ $future->short_description }}" required>
                <textarea name="long_description" class="form-control mb-2" rows="3">{{ $future->long_description }}</textarea>

                @if($future->image)
                    <img src="{{ asset('storage/' . $future->image) }}" width="100" height="100" class="mb-2">
                @endif
                <input type="file" name="image" class="form-control mb-3">

                <div class="mb-3">
                    @foreach ($future->counts ?? [] as $index => $item)
                        <div class="d-flex gap-2 mb-2">
                            <input type="number" name="counts[{{ $index }}][count]" class="form-control" value="{{ $item['count'] }}" required>
                            <input type="text" name="counts[{{ $index }}][title]" class="form-control" value="{{ $item['title'] }}" required>
                        </div>
                    @endforeach
                </div>

                <div class="d-flex gap-2">
                    <button class="btn btn-warning" style="width:200px;">Update</button>
                </div>
            </form>

            {{-- Delete form (outside of update form) --}}
            <form action="{{ route('future.destroy', $future->id) }}" method="POST" onsubmit="return confirm('Are you sure?')" class="mt-2">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" style="width:200px;">Delete</button>
            </form>
        </div>
    @endforeach
</div>

{{-- Scripts --}}
<script src="https://cdn.ckeditor.com/4.25.1-lts/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor');

    let countIndex = 1;
    function addCount() {
        const container = document.getElementById('count-group');
        const html = `
            <div class="d-flex gap-2 mb-2">
                <input type="number" name="counts[${countIndex}][count]" class="form-control" placeholder="Count" required>
                <input type="text" name="counts[${countIndex}][title]" class="form-control" placeholder="Count Title" required>
            </div>`;
        container.insertAdjacentHTML('beforeend', html);
        countIndex++;
    }
</script>
@endsection
