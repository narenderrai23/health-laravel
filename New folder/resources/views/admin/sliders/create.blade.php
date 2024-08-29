@extends('layouts.app')

@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Add New Slider</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.sliders.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="title">Title</label>
                                <input type="text" id="title" name="title" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="description">Description</label>
                                <textarea id="description" name="description" class="form-control" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="image_path">Image</label>
                                <input type="file" id="image_path" name="image_path" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="link">Link (optional)</label>
                                <input type="url" id="link" name="link" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
