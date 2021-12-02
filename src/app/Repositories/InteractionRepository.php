<?php
namespace VCComponent\Laravel\Interaction\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use VCComponent\Laravel\Interaction\Entities\Interaction;
use VCComponent\Laravel\Interaction\Repositories\InteractionInterface;
use VCComponent\Laravel\Vicoders\Core\Exceptions\NotFoundException;

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
    public function createOrUpdate($request)
    {
        $interaction = $this->model->updateOrCreate(
            [
                'resource_type' => $request['resource_type'],
                'resource_id' => $request['resource_id'],
                'user_id' => $request['user_id'],
            ],
            [
                'status' => $request['status'],
            ]
        );
        return $interaction;
    }
    public function delete($id)
    {
        $interaction = $this->model->find($id);
        if (empty($interaction)) {
            throw new NotFoundException('Interaction');
        }

        $interaction->delete();
        return $interaction;

    }
}
