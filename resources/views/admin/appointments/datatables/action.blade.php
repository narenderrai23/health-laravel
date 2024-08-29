<div class="d-flex justify-content-center">
    <a href="{{ route('admin.appointmentPdf', $row->id) }}" target="_blank" class="btn px-1 text-primary fs-3">
        <i class="fs-5 fa fa-download" aria-hidden="true"></i>
    </a>
    <a href="{{ route('admin.appointments.show', $row->id) }}" class="btn px-1 text-info fs-3" data-bs-toggle="tooltip">
        <i class="fs-5 fas fa-eye"></i>
    </a>
    <a href="javascript:void(0)" data-id="{{ $row->id }}" data-bs-toggle="tooltip"
        data-bs-original-title="{{ __('messages.common.delete') }}"
        class="btn px-1 text-danger fs-3 appointment-delete-btn">
        <i class="fs-5 fa fa-trash"></i>
    </a>
</div>
