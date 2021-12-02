<?php

namespace VCComponent\Laravel\Interaction\Traits;

use VCComponent\Laravel\Interaction\Entities\Interaction;
use VCComponent\Laravel\Interaction\Entities\View;

trait HasInteractionTrait
{
    public function count($status)
    {
        return $this->morphMany(Interaction::class, 'resource')->where('status', $status)->count();
    }
    public function check($user_id)
    {
        return $this->morphMany(Interaction::class, 'resource')->where('user_id', $user_id)->first();
    }
    public function getCountView()
    {
        return $this->morphMany(View::class, 'resource')->first();
    }
}
