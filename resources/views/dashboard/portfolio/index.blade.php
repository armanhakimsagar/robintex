@extends('dashboard.layouts')

@section('content')
    <div class="container mt-4">

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="card shadow-sm border-0 mb-4">
            <div class="card-header bg-primary text-white fw-semibold">
                <i class="fas fa-briefcase me-2"></i> Manage Portfolio
            </div>
            <div class="card-body">

                <form action="{{ route('portfolio.index') }}" method="POST">
                    @csrf

                    <div class="form-group mb-4">
                        <label for="editor" class="form-label fw-bold">Portfolio Description <span
                                class="text-danger">*</span></label>
                        <textarea name="description" id="editor" class="form-control rounded-3 shadow-sm" rows="10">{{ old('description', $portfolio->description ?? '') }}</textarea>
                        @error('description')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-save me-1"></i> Save Portfolio
                    </button>
                </form>
            </div>
        </div>

        {{-- Preview Section --}}
        @if (!empty($portfolio->description))
            <div class="card shadow-sm border-0">
                <div class="card-header bg-light fw-bold">
                    <i class="fas fa-eye me-2"></i> Portfolio Preview
                </div>
                <div class="card-body">
                    <div class="border rounded p-3" style="background-color: #fdfdfd;">
                        {!! $portfolio->description !!}
                    </div>
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
