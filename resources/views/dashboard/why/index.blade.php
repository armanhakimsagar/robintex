@extends('dashboard.layouts')

@section('content')
    <div class="container mt-5" style="max-width: 800px;">
        {{-- Section: Page Header --}}
        <section class="mb-4">
            <div class="card shadow">
                <div class="card-header bg-info text-white">
                    <h4 class="mb-0">Why Choose Us</h4>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <form action="{{ route('why.update') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Main Title</label>
                            <input type="text" name="title" class="form-control"
                                value="{{ old('title', $why->title ?? '') }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea name="description" id="editor1" class="form-control" rows="5">{{ old('description', $why->description ?? '') }}</textarea>
                        </div>
                        <button class="btn btn-success" style="width:200px">Update Main Section</button>
                    </form>
                </div>
            </div>
        </section>

        {{-- Section: Add Reason --}}
        <section class="mb-4">
            <div class="card shadow">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0">Add New Reason</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('why.reason.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-2"><input type="text" name="title" class="form-control"
                                placeholder="Reason Title" required></div>
                        <div class="mb-2"><input type="text" name="short_description" class="form-control"
                                placeholder="Short Description" required></div>
                        <div class="mb-2">
                            <textarea name="long_description" class="form-control" rows="4" placeholder="Long Description" required></textarea>
                        </div>
                        <button class="btn btn-primary" style="width:200px">Add Reason</button>
                    </form>
                </div>
            </div>
        </section>

        {{-- Section: Reason List --}}
        <section>
            <div class="card shadow">
                <div class="card-header bg-dark text-white">
                    <h5 class="mb-0">Reason List</h5>
                </div>
                <div class="card-body">
                    @foreach ($reasons as $reason)
                        <div class="card p-3 shadow-sm mb-3 border">
                            {{-- Update Form --}}
                            <form action="{{ route('why.reason.update', $reason->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mb-2">
                                        <input type="text" name="title" class="form-control"
                                            value="{{ $reason->title }}" placeholder="Title" required>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <input type="text" name="short_description" class="form-control"
                                            value="{{ $reason->short_description }}" placeholder="Short Description"
                                            required>
                                    </div>
                                    <div class="col-12 mb-2">
                                        <textarea name="long_description" class="form-control" rows="3" placeholder="Long Description" required>{{ $reason->long_description }}</textarea>
                                    </div>
                                </div>
                                <div class="d-flex gap-2 mt-3">
                                    <button type="submit" class="btn btn-warning">Update</button>
                            </form> {{-- Close update form here --}}

                            {{-- Delete Form --}}
                            <form action="{{ route('why.reason.delete', $reason->id) }}" method="POST"
                                onsubmit="return confirmDelete(event)">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                </div>
                @endforeach
            </div>
    </div>
    </section>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.ckeditor.com/4.25.1-lts/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor1');

        function confirmDelete(event) {
            event.preventDefault();
            if (confirm('Are you sure you want to delete this reason?')) {
                event.target.submit();
            }
        }
    </script>
@endsection
