@extends('layouts.app')
@push('links')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/css/alertify.min.css" />
@endpush

@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="mb-0">Insurance Companies</h4>
                        <button class="btn btn-primary mt-2" data-bs-toggle="modal"
                            data-bs-target="#createInsuranceModal">Add
                            New Insurance</button>
                    </div>
                    <div class="card-body">
                        <form id="editInsuranceForm" action="{{ route('admin.insurances.update', $insurance->id) }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="edit_name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="edit_name" value="{{ $insurance->name }}"
                                        name="name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="edit_description" class="form-label">Description</label>
                                    <input type="text" class="form-control" id="edit_description"
                                        value="{{ $insurance->description }}" name="description" required>
                                </div>
                                <div class="mb-3">
                                    <label for="edit_image" class="form-label">Image</label>
                                    <input type="file" class="form-control" id="edit_image" name="image_path">
                                </div>
                                <img id="edit_image_preview" src="{{ asset('storage/' . $insurance->image_path) }}"
                                    alt="Image preview" width="100">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/alertify.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.table').DataTable({
                "paging": true, // Enable pagination
                "searching": true, // Enable searching
                "ordering": true, // Enable sorting
                "info": true, // Show table information
                "autoWidth": false // Disable auto-width for columns
            });
        }); <
        script >
            document.getElementById('edit_image').addEventListener('change', function() {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('edit_image_preview').src = e.target.result;
                }
                reader.readAsDataURL(this.files[0]);
            });
    </script>

    </script>
@endpush
