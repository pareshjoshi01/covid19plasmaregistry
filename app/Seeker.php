<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seeker extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'encrypted_phone',
        'country_code',
        'email',
        'hospital_name',
        'hospital_contact_person',
        'hospital_contact_number',
        'hospital_address',
        'country',
        'zipcode',
        'document',
        'patient_blood_group',
        'otp_code',
        'is_verified'
    ];
}
