@extends('dashboard.layouts')

@section('content')
    <div class="container mt-4">
        <h2>Contact Us</h2>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('contact.index') }}" method="POST">
            @csrf

            <div class="form-group mb-3">
                <label>Description (Rich Text)</label>
                <textarea name="description" id="editor" class="form-control" rows="10">
                    {{ old('description', $contact->description ?? '') }}
                </textarea>
                @error('description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Save Contact Us</button>
        </form>

        {{-- Show saved content --}}
        @if (!empty($contact->description))
            <div class="mt-5">
                <h4>Preview:</h4>
                <div class="border p-3">
                    {!! $contact->description !!}
                </div>
            </div>
        @endif
    </div>

    {{-- CKEditor --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => console.error(error));
    </script>
@endsection
