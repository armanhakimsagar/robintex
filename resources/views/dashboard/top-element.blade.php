@extends('dashboard.layouts')

@section('content')

<style>
    .card {
        background-color: #fff;
        border: 1px solid #e3e6f0;
    }

    .form-label {
        font-weight: 500;
        margin-bottom: 0.3rem;
    }

    .input-group .form-control {
        border-right: 0;
    }

    .input-group .btn {
        border-left: 0;
    }
</style>


<div class="container mt-4">
    <div class="card shadow-lg rounded-4 p-4">
        <h4 class="mb-4 border-bottom pb-2">Top Elements</h4>

        {{-- Address, Facebook, LinkedIn, Twitter --}}
        @foreach (['address', 'facebook', 'linkedin', 'twitter'] as $field)
            <form action="{{ route('top-element.update', $field) }}" method="POST" class="mb-3">
                @csrf
                <label class="form-label">{{ ucfirst($field) }}</label>
                <div class="input-group">
                    <input type="text" name="value" class="form-control" placeholder="Enter {{ ucfirst($field) }}" 
                        value="{{ old('value', $data[$field] ?? '') }}">
                    <button class="btn btn-primary" type="submit">Update</button>
                </div>
                @error('value')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </form>
        @endforeach

        {{-- Logo Upload --}}
        <form action="{{ route('top-element.update', 'logo') }}" method="POST" enctype="multipart/form-data" class="mb-3">
            @csrf
            <label class="form-label">Logo <small class="text-muted">(Recommended: 350px × 70px)</small></label>
            <div class="input-group">
                <input type="file" name="value" class="form-control">
                <button class="btn btn-primary" type="submit">Update Logo</button>
            </div>
            @error('value')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </form>

        @if(session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif
    </div>
</div>
@endsection
