@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $service->name }}</h1>
        <h2>{{ $service->title }}</h2>
        <p>{{ $service->description }}</p>
        <img src="{{ $service->image_path }}" alt="{{ $service->name }}">
    </div>
@endsection
