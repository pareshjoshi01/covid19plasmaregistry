<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'encrypted_phone',
        'country_code',
        'location',
        'country',
        'zipcode',
        'email',
        'positive_test_date',
        'document',
        'blood_group',
        'fully_recovered',
        'recovery_date',
        'otp_code',
        'is_verified'
    ];
}
