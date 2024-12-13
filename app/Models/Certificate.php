<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Certificate extends Model
{
    use Hasfactory;

    protected $fillable = [
        'name',
        'issued_by',
        'issued_at',
        'file',
        'description',
    ];
}

