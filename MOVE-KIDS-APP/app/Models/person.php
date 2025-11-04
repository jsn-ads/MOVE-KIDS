<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

abstract class Person extends Model
{
    protected $fillable = [
        'name',
        'father',
        'mother',
        'phone',
        'phone_two',
        'cpf',
        'instagram',
    ];
}
