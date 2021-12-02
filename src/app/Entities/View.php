<?php

namespace VCComponent\Laravel\Interaction\Entities;

use Illuminate\Database\Eloquent\Model;

class View extends Model
{
    protected $fillable = [
        'resource_type',
        'resource_id',
        'count',
    ];
}
