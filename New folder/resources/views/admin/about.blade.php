@extends('layouts.app')
@push('styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" rel="stylesheet">
@endpush

@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">About</h4>
                    </div>
                    <div class="card-body">
                        <form
                            action="{{ isset($about) ? route('admin.about.update', $about->id) : route('admin.about.store' ?? '') }}"
                            method="POST" class="needs-validation" enctype="multipart/form-data" novalidate>
                            @csrf
                            @if (isset($about))
                                @method('PUT')
                            @endif
                            <div class="mb-3">
                                <label for="title">Title</label>
                                <input type="text" id="title" name="title" class="form-control"
                                    value="{{ old('title', $about->title ?? '') }}" required>
                                @error('title')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="philosophy">Philosophy</label>
                                <textarea id="philosophy" name="philosophy" class="form-control" required>{{ old('philosophy', $about->philosophy ?? '') }}</textarea>
                                @error('philosophy')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="contact_number">About Number</label>
                                <input type="text" id="contact_number" name="contact_number" class="form-control"
                                    value="{{ old('contact_number', $about->contact_number ?? '') }}">
                                @error('contact_number')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="image_path">Image</label>
                                <input type="file" id="image_path" name="image_path" class="form-control">
                                @isset($about->image_path)
                                    <img src="{{ asset('storage/' . $about->image_path ?? '') }}" alt="" width="150">
                                @endisset
                                @error('image_path')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <!-- Summernote JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#philosophy').summernote({
                height: 300, // set the height of the editor
            });
        });
    </script>
@endpush
