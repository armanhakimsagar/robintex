@extends('dashboard.layouts')

@section('content')
<!-- Add this in the <head> or just before </body> -->
    <script src="https://cdn.ckeditor.com/4.25.1/standard/ckeditor.js"></script>

<div class="container mt-4">
    <h4 class="mb-4">Top Feature</h4>
    <div class="p-4 bg-white rounded shadow">

        @foreach(['title', 'short_description'] as $field)
            <form action="{{ route('top-feature.update', $field) }}" method="POST" class="mb-3">
                @csrf
                <div class="input-group">
                    <input type="text" name="value" class="form-control" placeholder="Enter {{ ucfirst(str_replace('_', ' ', $field)) }}"
                           value="{{ old('value', $feature->$field ?? '') }}">
                    <button class="btn btn-primary" type="submit">Update {{ ucfirst(str_replace('_', ' ', $field)) }}</button>
                </div>
                @error('value')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </form>
        @endforeach
        <form action="{{ route('top-feature.update', 'long_description') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="long_description">Long Description</label>
                <textarea name="value" id="long_description" class="form-control" rows="5">{!! old('long_description', $data['long_description'] ?? '') !!}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update Long Description</button>
        </form>
        
        <script>
            CKEDITOR.replace('long_description');
        </script>
        
        <form action="{{ route('top-feature.update', 'icon') }}" method="POST" enctype="multipart/form-data" class="mb-3">
            @csrf
            <label class="form-label">Icon (50x50)</label>
            <div class="input-group">
                <input type="file" name="value" class="form-control">
                <button class="btn btn-primary" type="submit">Upload Icon</button>
            </div>
            @if(!empty($feature->icon))
                <div class="mt-2">
                    <img src="{{ asset('uploads/' . $feature->icon) }}" width="50" height="50">
                </div>
            @endif
            @error('value')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </form>

        @if(session('success'))
            <div class="alert alert-success mt-2">
                {{ session('success') }}
            </div>
        @endif
    </div>
</div>
@endsection
