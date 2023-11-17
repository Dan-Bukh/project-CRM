<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'supplier_id',
        'supplier_name',
        'speciality',
        'customer_name',
        'email',
        'number',
        'comment',
        'time',
        'created_at',
        'updated_at',
    ];
}
