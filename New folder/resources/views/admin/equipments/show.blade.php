@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $equipment->name }}</h1>
        <h2>{{ $equipment->title }}</h2>
        <p>{{ $equipment->description }}</p>
        <img src="{{ $equipment->image_path }}" alt="{{ $equipment->name }}">
    </div>
@endsection
