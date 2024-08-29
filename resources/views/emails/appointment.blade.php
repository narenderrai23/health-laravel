<!DOCTYPE html>
<html>
<head>
    <title>New Appointment</title>
</head>
<body>
    <h1>New Appointment Booked</h1>

    <p><strong>Hospital:</strong> {{ $appointmentData['hospital'] }}</p>
    <p><strong>Patient Name:</strong> {{ $appointmentData['patient_name'] }}</p>
    <p><strong>Mobile Number:</strong> {{ $appointmentData['mobile_number'] }}</p>
    <p><strong>Department:</strong> {{ $appointmentData['department'] }}</p>
    <p><strong>Appointment Date:</strong> {{ $appointmentData['appointment_date'] }}</p>
    <p><strong>Comment:</strong> {{ $appointmentData['comment'] ?? 'N/A' }}</p>

    <p>Thank you for booking your appointment with us.</p>
</body>
</html>
