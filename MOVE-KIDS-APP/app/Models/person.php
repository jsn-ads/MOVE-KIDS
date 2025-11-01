<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class person extends Model
{
    use SoftDeletes;

    protected $table = 'people';

    protected $fillable = [
        'name',
        'father',
        'mother',
        'phone',
        'phone_two',
        'cpf',
        'instagram',
    ];

    protected $dates = ['deleted_at'];

}
