@extends('layouts.app')

@push('links')
    <link href="https://cdn.jsdelivr.net/npm/datatables@1.10.18/media/css/jquery.dataTables.min.css" rel="stylesheet">
@endpush
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">Appointments</h4>
                </div>
                <div class="card-body">
                    {{ $dataTable->table(['class' => 'table table-bordered table-hover table-striped']) }}
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/datatables@1.10.18/media/js/jquery.dataTables.min.js"></script>
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
