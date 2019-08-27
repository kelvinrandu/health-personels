<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professional extends Model
{
    //
    protected $fillable = [

        'professional_name',
        'id_number',
        'registration_number',
        'gender',
        'workstation',
        'facility_type',
        'annual_license_date'
        ];
}
