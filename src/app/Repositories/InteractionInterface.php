<?php
namespace VCComponent\Laravel\Interaction\Repositories;

use Prettus\Repository\Contracts\RepositoryInterface;

interface InteractionInterface extends RepositoryInterface
{
    public function createOrUpdate($request);
    public function delete($id);
}
