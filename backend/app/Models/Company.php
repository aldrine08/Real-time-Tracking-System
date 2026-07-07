<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [

        'uuid',

        'name',

        'email',

        'phone',

        'website',

        'logo',

        'address',

        'city',

        'country',

        'timezone',

        'subscription_plan',

        'subscription_status',

        'status'
    ];
}