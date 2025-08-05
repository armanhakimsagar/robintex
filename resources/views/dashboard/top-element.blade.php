@extends('dashboard.layouts')

@section('content')
    <div class="container">
        <h2 class="mb-4">Top Elements</h2>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        {{-- Define fields --}}
        @php
            $fields = [
                'email' => 'Email Address',
                'phone' => 'Phone Number',
                'address' => 'Address',
                'facebook' => 'Facebook URL',
                'linkedin' => 'LinkedIn URL',
            ];
            $data = \App\Models\TopElement::pluck('value', 'key')->toArray();
        @endphp

        @foreach ($fields as $field => $label)
            <form action="{{ route('top-elements.update', $field) }}" method="POST" class="mb-3">
                @csrf
                <div class="form-group">
                    <label>{{ $label }}</label>
                    <input type="text" name="value" class="form-control @error('value_' . $field) is-invalid @enderror"
                        value="{{ old('value_' . $field, $data[$field] ?? '') }}">
                    @error('value_' . $field)
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary mt-2">Update {{ ucfirst($field) }}</button>
            </form>
        @endforeach

        {{-- Logo Upload --}}
        <form action="{{ route('top-elements.update', 'logo') }}" method="POST" enctype="multipart/form-data"
            class="mb-5">
            @csrf
            <div class="form-group">
                <label>Logo</label>
                <input type="file" name="value" class="form-control-file @error('value_logo') is-invalid @enderror">
                @error('value_logo')
                    <small class="text-danger">{{ $message }}</small>
                @enderror

                @if (!empty($data['logo']))
                    <div class="mt-2">
                        <img src="{{ asset('storage/' . $data['logo']) }}" alt="Logo" width="150">
                    </div>
                @endif
            </div>
            <button type="submit" class="btn btn-primary mt-2">Update Logo</button>
        </form>
    </div>
@endsection
