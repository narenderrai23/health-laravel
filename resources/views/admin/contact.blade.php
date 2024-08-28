@extends('layouts.app')

@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">Contact</h4>
                    </div>
                    <div class="card-body">
                        <form
                            action="{{ isset($contact) ? route('admin.contacts.update', $contact->id) : route('admin.contacts.store') }}"
                            method="POST" class="needs-validation" novalidate>
                            @csrf
                            @if (isset($contact))
                                @method('PUT')
                            @endif
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email*</label>
                                    <input type="email" name="email"
                                        class="form-control @error('email') is-invalid @enderror" id="email" required
                                        value="{{ old('email', $contact->email ?? '') }}">
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input type="text" name="phone"
                                        class="form-control @error('phone') is-invalid @enderror" id="phone"
                                        value="{{ old('phone', $contact->phone ?? '') }}">
                                    @error('phone')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="location" class="form-label">Location</label>
                                <textarea name="location" class="form-control @error('location') is-invalid @enderror" id="location" rows="5">{{ old('location', $contact->location ?? '') }}</textarea>
                                @error('location')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-dark">{{ isset($contact) ? 'Update' : 'Create' }}
                                    Location</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
