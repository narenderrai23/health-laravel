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
                        <!-- Table to display insurance companies -->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($insurances as $insurance)
                                    <tr id="row_{{ $insurance->id }}">
                                        <td>{{ $insurance->id }}</td>
                                        <td class="text">{{ $insurance->name }}</td>
                                        <td>
                                            <img class="img" src="{{ asset('storage/' . $insurance->image_path) }}"
                                                alt="{{ $insurance->name }}" width="100">
                                        </td>
                                        <td>
                                            <button class="btn btn-warning btn-sm" data-id="{{ $insurance->id }}"
                                                data-name="{{ $insurance->name }}" data-bs-toggle="modal"
                                                data-bs-target="#editInsuranceModal"
                                                data-image="{{ asset('storage/' . $insurance->image_path) }}">Edit</button>
                                            <form action="{{ route('admin.insurances.destroy', $insurance->id) }}"
                                                method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Create Insurance Modal -->
    <div class="modal fade" id="createInsuranceModal" tabindex="-1" aria-labelledby="createInsuranceModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createInsuranceModalLabel">Add New Insurance</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="createInsuranceForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-control" id="image" name="image_path" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Edit Insurance Modal -->
    <div class="modal fade" id="editInsuranceModal" tabindex="-1" aria-labelledby="editInsuranceModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editInsuranceModalLabel">Edit Insurance</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="editInsuranceForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="edit_name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="edit_name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="edit_image" class="form-label">Image</label>
                            <input type="file" class="form-control" id="edit_image" name="image_path">
                        </div>
                        <img id="edit_image_preview" src="" alt="Image preview" width="100">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
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
        });

        class InsuranceManager {
            constructor() {
                this.init();
            }

            init() {
                this.setupEventListeners();
            }

            setupEventListeners() {
                // Show edit modal with data
                $('#editInsuranceModal').on('show.bs.modal', this.showEditModal.bind(this));

                // Handling form submission for creating insurance
                $('#createInsuranceForm').on('submit', this.handleCreateSubmission.bind(this));

                // Handling form submission for editing insurance
                $('#editInsuranceForm').on('submit', this.handleEditSubmission.bind(this));

                // Handling delete button click
                $('.table').on('click', '.btn-danger', this.handleDeleteConfirmation.bind(this));
            }

            showEditModal(event) {
                const button = $(event.relatedTarget);
                const id = button.data('id');
                const name = button.data('name');
                const image = button.data('image');

                const form = $('#editInsuranceForm');
                form.attr('action', `/admin/insurances/${id}`);

                $('#edit_name').val(name);
                $('#edit_image_preview').attr('src', image);
            }

            handleFormSubmission(formData, url, successCallback) {
                axios.post(url, formData, {
                        headers: {
                            'Content-Type': 'multipart/form-data'
                        }
                    })
                    .then(response => {
                        if (response.data.success) {
                            successCallback(response.data);
                            alertify.success(response.data.message);
                        }
                    })
                    .catch(error => {
                        console.error(error.response.data);
                    });
            }

            handleCreateSubmission(event) {
                event.preventDefault();
                const formData = new FormData(event.target);

                this.handleFormSubmission(formData, "{{ route('admin.insurances.store') }}", (data) => {
                    $('#createInsuranceModal').modal('hide');

                    const insurance = data.insurance;
                    const newRow = `
                <tr id="row_${insurance.id}">
                    <td class="text">${insurance.name}</td>
                    <td class="img"><img src="/storage/${insurance.image_path}" alt="${insurance.name}" width="100"></td>
                    <td>
                        <button class="btn btn-warning btn-sm edit-btn" data-id="${insurance.id}" data-name="${insurance.name}" data-image="/storage/${insurance.image_path}">Edit</button>
                        <form action="/admin/insurances/${insurance.id}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            `;
                    $('.table tbody').append(newRow);
                });
            }

            handleEditSubmission(event) {
                event.preventDefault();
                const formData = new FormData(event.target);

                this.handleFormSubmission(formData, $(event.target).attr('action'), (data) => {
                    $('#editInsuranceModal').modal('hide');

                    const insurance = data.insurance;
                    const row = $(`#row_${insurance.id}`);
                    row.find('.text').text(insurance.name);
                    row.find('.img').html(
                        `<img src="/storage/${insurance.image_path}" alt="${insurance.name}" width="100">`);
                });
            }

            handleDeleteConfirmation(event) {
                event.preventDefault();
                alertify.confirm(
                    'Confirm Deletion',
                    'Are you sure you want to delete this record?',
                    () => {
                        const id = $(event.target).closest('form').attr('action').split('/').pop();
                        this.handleDelete(id);
                    },
                    () => {}
                );
            }

            handleDelete(id) {
                axios.delete(`/admin/insurances/${id}`)
                    .then(response => {
                        if (response.data.success) {
                            $(`#row_${id}`).remove();
                            alertify.success(response.data.message);
                        }
                    })
                    .catch(error => {
                        console.error(error.response.data);
                        alertify.error('An error occurred while deleting the record.');
                    });
            }
        }

        $(document).ready(() => {
            new InsuranceManager();
        });
    </script>
@endpush
