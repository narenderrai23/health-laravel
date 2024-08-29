@extends('layouts.app')

@section('content')
    <!-- Sale & Revenue Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12">
                <div class="bg-light rounded  p-4">
                    <div class="d-flex align-items-center justify-content-between">
                        <h2>Hello <span class="text-body">{{ auth()->user()->name ?? null }}</span>,</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-12">
            </div>
        </div>
    </div>
@endsection
