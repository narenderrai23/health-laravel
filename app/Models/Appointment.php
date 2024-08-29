<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'hospital',
        'patient_name',
        'mobile_number',
        'department',
        'comment',
        'appointment_date',
        'appointment_unique_id',
        'status',
    ];

    const ALL = 0;

    const BOOKED = 1;

    const CHECK_IN = 2;

    const CHECK_OUT = 3;

    const CANCELLED = 4;
    const STATUS = [
        self::ALL => 'All',
        self::BOOKED => 'Booked',
        self::CHECK_IN => 'Check In',
        self::CHECK_OUT => 'Check Out',
        self::CANCELLED => 'Cancelled',
    ];

    public static function generateAppointmentUniqueId(): string
    {
        do {
            $alphabetPart = Str::upper(Str::random(3)); // Generates 4 random uppercase letters
            $numericPart = str_pad(random_int(0, 9999), 4, '0', STR_PAD_LEFT); // Generates 6-digit number with leading zeros if necessary
            $appointmentUniqueId = $alphabetPart . $numericPart;
        } while (self::where('appointment_unique_id', $appointmentUniqueId)->exists());

        return $appointmentUniqueId;
    }



    public function getStatusNameAttribute()
    {
        return self::STATUS[$this->status];
    }
}
