<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_type',
        'identity_no',
        'password',
        'name',
        'designation',
        'department',
        'email',
        'mobile_no',
        'building_no',
        'room_flat_no',
        'status'
    ];
}
