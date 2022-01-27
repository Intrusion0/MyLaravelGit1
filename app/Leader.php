<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leader extends Model
{

    protected $fillable = [
        'name',
        'surname',
        'age',
        'dateOfBirth', 
        'cf'

    ];
}
