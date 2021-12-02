<?php
namespace VCComponent\Laravel\Interaction\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use VCComponent\Laravel\Interaction\Entities\Interaction;
use VCComponent\Laravel\Interaction\Repositories\InteractionInterface;

class InteractionRepository extends BaseRepository implements InteractionInterface
{
    public function model()
    {
        if (isset(config('interaction.models')['interaction'])) {
            return config('interaction.models.interaction');
        } else {
            return Interaction::class;
        }
    }

}
