@extends('dashboard.layouts')

@section('content')
    <div class="container mt-5" style="max-width: 800px;">

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <div class="card-header bg-info text-white fw-semibold">
            <i class="fas fa-plus-circle me-2"></i> Client
        </div>

        <form action="{{ route('client.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group mb-3">
                <textarea name="description" id="editor" class="form-control" rows="6">{{ old('description', $about->description ?? '') }}</textarea>

                <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
                <script>
                    ClassicEditor
                        .create(document.querySelector('#editor'))
                        .catch(error => {
                            console.error(error);
                        });
                </script>

                @error('description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>


            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
