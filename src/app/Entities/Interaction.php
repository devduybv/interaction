<?php

namespace VCComponent\Laravel\Interaction\Entities;

use Illuminate\Database\Eloquent\Model;

class Interaction extends Model
{
    protected $fillable = [
        'resource_type',
        'resource_id',
        'user_id',
        'status',
    ];
}
