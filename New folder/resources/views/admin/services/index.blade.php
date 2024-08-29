@extends('layouts.app')

@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h1>Services</h1>
                        <a href="{{ route('admin.services.create') }}" class="btn btn-primary">Add Service</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Title</th>
                                    <th>Link</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($services as $service)
                                    <tr>
                                        <td>{{ $service->id }}</td>
                                        <td>
                                            <img src="{{ Storage::url($service->image_path) }}" alt="{{ $service->title }}"
                                                style="max-width: 100px;">
                                        </td>
                                        <td>{{ $service->name }}</td>
                                        <td>{{ $service->title }}</td>
                                        <td><a href="{{ $service->link }}" target="_blank">{{ $service->slug }}</a></td>
                                        <td>
                                            <div class="btn-group btn-sm" role="group">
                                                <a href="{{ route('admin.services.edit', $service) }}"
                                                    class="btn btn-success">Edit</a>
                                                <form action="{{ route('admin.services.destroy', $service) }}"
                                                    method="POST" style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
