@extends('layouts.app')

@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4>Sliders</h4>
                        <a href="{{ route('admin.sliders.create') }}" class="btn btn-primary">Add New Slider</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Link</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sliders as $slider)
                                    <tr>
                                        <td>
                                            <img src="{{ Storage::url($slider->image_path) }}" alt="{{ $slider->title }}"
                                                style="max-width: 100px;">
                                        </td>
                                        <td>{{ $slider->title }}</td>
                                        <td>{{ $slider->description }}</td>
                                        <td><a href="{{ $slider->link }}" target="_blank">{{ $slider->link }}</a></td>
                                        <td>
                                            <div class="btn-group btn-sm" role="group">
                                                <a href="{{ route('admin.sliders.edit', $slider) }}"
                                                    class="btn btn-success">Edit</a>
                                                <form action="{{ route('admin.sliders.destroy', $slider) }}" method="POST"
                                                    style="display: inline-block;">
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
