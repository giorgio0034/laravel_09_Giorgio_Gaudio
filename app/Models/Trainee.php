<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

class Trainee extends Model
{
    protected $fillable = [
        'name',
        'surname',
        'age',
        'email'
    ];



}
