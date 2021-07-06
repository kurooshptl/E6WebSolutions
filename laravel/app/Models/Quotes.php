<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quotes extends Model
{

    public $fillable = ['name',
        'email',
        'contact',
        'company_name',
        'company_location',
        'company_services',
        'company_number_of_employee',
        'company_demographic',
        'design',
        'development',
        'marketing',
        'competitors_position',
        'brand_message_detail'
    ];
}
