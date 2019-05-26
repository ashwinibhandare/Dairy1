<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Cattle extends Model
{
    protected $fillable = [
        'dob', 'gender', 'date_of_buying','cattle_type', 'cattle_bread', 'lactation_during_buying'
    ];

    protected $table = 'cattle';
}
