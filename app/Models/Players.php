<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Players extends Model
{
    use HasFactory;

    private string $name;
    private string $age;
    /* private preferedPostion;*/


    protected $fillable = [
        'name',
        'age'
    ];

}
