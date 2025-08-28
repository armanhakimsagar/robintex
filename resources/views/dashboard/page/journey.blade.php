@extends('dashboard.layouts')

@section('content')
    <div class="container mt-5" style="max-width: 800px;">

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <div class="card-header bg-info text-white fw-semibold">
            <i class="fas fa-plus-circle me-2"></i> Journey
        </div>

        <form action="{{ route('journey.store') }}" method="POST" enctype="multipart/form-data">
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


                @foreach (['banner_one'] as $banner)
                    <div class="form-group mb-3">
                        <label>{{ ucfirst(str_replace('_', ' ', $banner)) }}</label>
                        <input type="file" class="form-control" name="{{ $banner }}">

                        @if (!empty($about) && !empty($about->$banner))
                            <img src="{{ asset('storage/' . $about->$banner) }}" alt="" style="max-height:150px;"
                                class="mt-2">
                        @endif

                        @error($banner)
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                @endforeach
            </div>


            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
