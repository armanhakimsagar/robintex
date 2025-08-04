@extends('dashboard.layouts')

@section('content')
<div class="container mt-4">
    <h4>Our Goals</h4>

    <form action="{{ route('goals.store') }}" method="POST" enctype="multipart/form-data" id="goalForm">
        @csrf

        <div id="goalContainer">
            <div class="goal-item border p-3 mb-3">
                <label>Icon (50x50)</label>
                <input type="file" name="icon[]" class="form-control mb-2" accept="image/*">

                <label>Title</label>
                <input type="text" name="title[]" class="form-control mb-2" required>

                <label>Short Description</label>
                <input type="text" name="short_description[]" class="form-control mb-2" required>

                <label>Long Description</label>
                <textarea name="long_description[]" class="form-control long-description" rows="4" required></textarea>
            </div>
        </div>

        <button type="button" class="btn btn-secondary" id="addGoal">➕ Add More</button>
        <button type="submit" class="btn btn-primary mt-2">Submit</button>
    </form>

    @if(session('success'))
        <div class="alert alert-success mt-3">{{ session('success') }}</div>
    @endif

    <hr>

    <h5>Existing Goals</h5>
    <div class="row">
        @foreach($goals as $goal)
            <div class="col-md-6 mb-3">
                <div class="card shadow p-3">
                    @if($goal->icon)
                        <img src="{{ asset($goal->icon) }}" width="50" height="50">
                    @endif
                    <h6 class="mt-2">{{ $goal->title }}</h6>
                    <p>{{ $goal->short_description }}</p>
                    <div>{!! $goal->long_description !!}</div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

@section('scripts')
<!-- CKEditor CDN -->
<script src="https://cdn.ckeditor.com/4.25.1/standard/ckeditor.js"></script>

<script>
    let editorCount = 1;

    // Apply CKEditor to all current and future elements
    function applyCKEditorTo(textarea) {
        const uniqueId = 'editor_' + editorCount++;
        textarea.id = uniqueId;
        CKEDITOR.replace(uniqueId);
    }

    // Initialize CKEditor for existing textarea
    document.querySelectorAll('.long-description').forEach(el => applyCKEditorTo(el));

    // Handle Add More
    document.getElementById('addGoal').addEventListener('click', function () {
        const container = document.getElementById('goalContainer');

        const newItem = document.createElement('div');
        newItem.classList.add('goal-item', 'border', 'p-3', 'mb-3');
        newItem.innerHTML = `
            <label>Icon (50x50)</label>
            <input type="file" name="icon[]" class="form-control mb-2" accept="image/*">

            <label>Title</label>
            <input type="text" name="title[]" class="form-control mb-2" required>

            <label>Short Description</label>
            <input type="text" name="short_description[]" class="form-control mb-2" required>

            <label>Long Description</label>
            <textarea name="long_description[]" class="form-control long-description" rows="4" required></textarea>
        `;

        container.appendChild(newItem);

        const newTextarea = newItem.querySelector('textarea.long-description');
        applyCKEditorTo(newTextarea);
    });
</script>
@endsection
