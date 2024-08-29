<div class="row">
    <!-- Hospital Selection -->
    <div class="col-lg-6">
        <div class="form-group">
            <label class="form-label" for="hospitalList">Select Hospital</label>
            <select class="form-select" id="hospitalList" data-control="select2" name="hospital">
                <option value="">Select Hospital</option>
                <option value="Apex Citi Hospital" {{ old('hospital') == 'Apex Citi Hospital' ? 'selected' : '' }}>Apex Citi Hospital > 15% Flat</option>
                <option value="Makkar Hospital" {{ old('hospital') == 'Makkar Hospital' ? 'selected' : '' }}>Makkar Hospital > 10%</option>
                <option value="R K Hospital" {{ old('hospital') == 'R K Hospital' ? 'selected' : '' }}>R K Hospital > 10-15%</option>
            </select>
            @error('hospital')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <!-- Patient Name -->
    <div class="col-lg-6 name-details">
        <div class="form-group">
            <label for="patientName" class="form-label">Patient Name*</label>
            <input type="text" class="form-control" id="patientName" name="patient_name" value="{{ old('patient_name') }}" required>
            @error('patient_name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <!-- Mobile Number -->
    <div class="col-lg-6 name-details">
        <div class="form-group">
            <label for="mobileNumber" class="form-label">Mobile Number*</label>
            <input type="text" class="form-control" id="mobileNumber" name="mobile_number" value="{{ old('mobile_number') }}" required>
            @error('mobile_number')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <!-- Email -->
    <div class="col-lg-6">
        <div class="form-group">
            <label class="form-label" for="template-medical-email">Email:<span class="required"></span></label>
            <input type="email" id="template-medical-email" name="email" class="form-control" value="{{ old('email') }}" placeholder="Email">
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <!-- Department -->
    <div class="col-lg-6">
        <div class="form-group">
            <label for="department" class="form-label">Department*</label>
            <input type="text" class="form-control" id="department" name="department" value="{{ old('department') }}" required>
            @error('department')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <!-- Comment -->
    <div class="col-lg-6">
        <div class="form-group">
            <label for="comment" class="form-label">Comment</label>
            <textarea class="form-control" id="comment" name="comment">{{ old('comment') }}</textarea>
            @error('comment')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <!-- Appointment Date -->
    <div class="col-lg-6">
        <div class="form-group">
            <label class="form-label" for="templateAppointmentDate">Appointment Date: <span class="required"></span></label>
            <input type="text" id="templateAppointmentDate" name="appointment_date" class="form-control bg-white"
                value="{{ old('appointment_date') }}" placeholder="Select Date" autocomplete="off">
            @error('appointment_date')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <!-- Submit Button -->
    <div class="col-12 text-center">
        <button class="btn btn-primary" type="submit" id="saveBtn" value="submit">Confirm Booking</button>
    </div>
</div>
