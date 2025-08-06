@extends('dashboard.layouts')

@section('content')
    <div class="container">
        <h2 class="mb-4">Service Management</h2>

        {{-- Flash Message --}}
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        {{-- Add New Service Form --}}
        <div class="card mb-4">
            <div class="card-header">Add New Service</div>
            <div class="card-body">
                <form action="{{ route('services.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Short Description</label>
                        <input type="text" name="short_description" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label>Long Description</label>
                        <textarea name="long_description" class="form-control" rows="4" required></textarea>
                    </div>

                    <button class="btn btn-success">Add Service</button>
                </form>
            </div>
        </div>

        {{-- Service List --}}
        <div class="card">
            <div class="card-header">Service List</div>
            <div class="card-body">
                @if ($services->isEmpty())
                    <p>No services added yet.</p>
                @else
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Short Description</th>
                                <th>Long Description</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($services as $service)
                                <tr>
                                    <form action="{{ route('services.update', $service->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <td>
                                            <input type="text" name="title" value="{{ $service->title }}"
                                                class="form-control" required>
                                        </td>
                                        <td>
                                            <input type="text" name="short_description"
                                                value="{{ $service->short_description }}" class="form-control" required>
                                        </td>
                                        <td>
                                            <textarea name="long_description" class="form-control" rows="2" required>{{ $service->long_description }}</textarea>
                                        </td>
                                        <td style="white-space: nowrap;">
                                            <button type="submit" class="btn btn-sm btn-primary">Update</button>
                                    </form> {{-- Close update form here --}}

                                    <form action="{{ route('services.destroy', $service->id) }}" method="POST"
                                        style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger"
                                            onclick="return confirm('Delete this service?')">Delete</button>
                                    </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
@endsection
