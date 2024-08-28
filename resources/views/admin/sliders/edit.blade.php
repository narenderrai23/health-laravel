@extends('layouts.app')

@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h1>Edit Slider</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.sliders.update', $slider) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="title">Title</label>
                                <input type="text" id="title" name="title" class="form-control"
                                    value="{{ $slider->title }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="description">Description</label>
                                <textarea id="description" name="description" class="form-control" required>{{ $slider->description }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="image_path">Image (optional)</label>
                                <input type="file" id="image_path" name="image_path" class="form-control">
                                @if ($slider->image_path)
                                    <img src="{{ Storage::url($slider->image_path) }}" alt="{{ $slider->title }}"
                                        class="mt-2" style="max-width: 100px;">
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="link">Link (optional)</label>
                                <input type="name" id="link" name="link" class="form-control"
                                    value="{{ $slider->link }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
