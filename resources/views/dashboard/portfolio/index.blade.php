@extends('dashboard.layouts')

@section('content')
    <div class="container mt-4">
        <h2>Portfolio</h2>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('portfolio.index') }}" method="POST">
            @csrf

            <div class="form-group mb-3">
                <label>Description (Rich Text)</label>
                <textarea name="description" id="editor" class="form-control" rows="10">
                    {{ old('description', $portfolio->description ?? '') }}
                </textarea>
                @error('description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Save Portfolio</button>
        </form>

        {{-- Show saved content below --}}
        @if (!empty($portfolio))
            <div class="mt-5">
                <h4>Preview:</h4>
                <div class="border p-3">
                    {!! $portfolio->description !!}
                </div>
            </div>
        @endif
    </div>

    {{-- Load CKEditor --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => console.error(error));
    </script>
@endsection
