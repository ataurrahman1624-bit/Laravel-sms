<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentAdmission extends Model
{
    protected $fillable = [
        'name',
        'parent_name',
        'email',
        'phone',
        'address',
        'payment_method',
        'transaction_id'
    ];
    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];
}
