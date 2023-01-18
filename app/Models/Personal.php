<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;
    protected $fillable = [
        'fname',
        'lname',
        'lstDobDay',
        'lstDobMonth',
        'lstDobYear',
        'lstDobDay',
        'email',
        'phone',
        'ipaddress',
        'devicetype',
        'browser',
        'useragent'
    ];
}
