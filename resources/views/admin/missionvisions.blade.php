@extends('layouts.app')

@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="mb-0">Mission and Vision</h4>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#missionVisionModal">
                            Add Mission Vision
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="accordion" id="missionVisionAccordion">
                            @foreach ($missionvisions as $missionvision)
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading{{ $missionvision->id }}">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse{{ $missionvision->id }}" aria-expanded="false"
                                            aria-controls="collapse{{ $missionvision->id }}">
                                            {{ $missionvision->section }}
                                        </button>
                                    </h2>
                                    <div id="collapse{{ $missionvision->id }}" class="accordion-collapse collapse"
                                        aria-labelledby="heading{{ $missionvision->id }}"
                                        data-bs-parent="#missionVisionAccordion">
                                        <div class="accordion-body">
                                            <form action="{{ route('admin.missionvisions.update', $missionvision->id) }}"
                                                method="POST" class="needs-validation" enctype="multipart/form-data"
                                                novalidate>
                                                @csrf
                                                @method('PUT')
                                                <div class="mb-3">
                                                    <label for="section{{ $missionvision->id }}">Section</label>
                                                    <input type="text" id="section{{ $missionvision->id }}"
                                                        name="section" class="form-control"
                                                        value="{{ old('section', $missionvision->section) }}" required>
                                                    @error('section')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label for="icon{{ $missionvision->id }}">Icon</label>
                                                    <input type="text" id="icon{{ $missionvision->id }}" name="icon"
                                                        class="form-control"
                                                        value="{{ old('icon', $missionvision->icon) }}" required>
                                                    @error('icon')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label for="title{{ $missionvision->id }}">Title</label>
                                                    <input type="text" id="title{{ $missionvision->id }}" name="title"
                                                        class="form-control"
                                                        value="{{ old('title', $missionvision->content['title']) }}"
                                                        required>
                                                    @error('title')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label for="description{{ $missionvision->id }}">Description</label>
                                                    <textarea id="description{{ $missionvision->id }}" name="description" class="form-control" required>{{ old('description', $missionvision->content['description']) }}</textarea>
                                                    @error('description')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label for="services{{ $missionvision->id }}">Services</label>
                                                    <input type="text" id="services{{ $missionvision->id }}"
                                                        name="services[]" class="form-control"
                                                        value="{{ old('services', implode(', ', $missionvision->content['services'])) }}"
                                                        required>
                                                    <small class="form-text text-muted">Separate services with
                                                        commas.</small>
                                                    @error('services')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label for="image_path{{ $missionvision->id }}">Image</label>
                                                    <input type="file" id="image_path{{ $missionvision->id }}"
                                                        name="image_path" class="form-control">
                                                        @isset($missionvision->content['image_path'])
                                                        <img src="{{ asset('storage/' . $missionvision->content['image_path']) }}"
                                                            alt="" width="150" class="img-thumbnail mt-3">
                                                    @endisset
                                                    @error('image_path')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="missionVisionModal" tabindex="-1" aria-labelledby="missionVisionModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="missionVisionModalLabel">Add Mission Vision</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.missionvisions.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="section">Section</label>
                            <input type="text" class="form-control" id="section" name="section" required>
                            @if ($errors->has('section'))
                                <span class="text-danger">{{ $errors->first('section') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="icon">Icon</label>
                            <input type="text" class="form-control" id="icon" name="icon" required>
                            @if ($errors->has('icon'))
                                <span class="text-danger">{{ $errors->first('icon') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                            @if ($errors->has('title'))
                                <span class="text-danger">{{ $errors->first('title') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" name="description" required></textarea>
                            @if ($errors->has('description'))
                                <span class="text-danger">{{ $errors->first('description') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="services">Services</label>
                            <input type="text" class="form-control" id="services" name="services[]" required>
                            @if ($errors->has('services'))
                                <span class="text-danger">{{ $errors->first('services') }}</span>
                            @endif
                            <small class="form-text text-muted">Separate services with commas.</small>
                        </div>
                        <div class="form-group">
                            <label for="image_path">Image Path</label>
                            <input type="file" class="form-control" id="image_path" name="image_path" required>
                            @if ($errors->has('image_path'))
                                <span class="text-danger">{{ $errors->first('image_path') }}</span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
