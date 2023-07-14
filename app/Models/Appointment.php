<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'consultant_id',
        'appointment_date',
        'appointment_time',
        'client_name',
    ];
}
