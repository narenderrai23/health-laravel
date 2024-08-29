@extends('layouts.app')

@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">Fun Fact</h4>
                    </div>
                    <div class="card-body">
                        <form
                            action="{{ isset($funfact) ? route('admin.funfact.update', $funfact->id) : route('admin.funfact.store') }}"
                            method="POST" class="needs-validation" novalidate>
                            @csrf
                            @if (isset($funfact))
                                @method('PUT')
                            @endif
                            <div class="mb-3">
                                <label for="icon">Icon</label>
                                <input type="text" id="icon" name="icon" class="form-control"
                                    value="{{ old('icon', $funfact->icon ?? '') }}" required>
                                @error('icon')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="count">Count</label>
                                <input type="number" id="count" name="count" class="form-control"
                                    value="{{ old('count', $funfact->count ?? '') }}" required>
                                @error('count')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="title">Title</label>
                                <input type="text" id="title" name="title" class="form-control"
                                    value="{{ old('title', $funfact->title ?? '') }}" required>
                                @error('title')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
