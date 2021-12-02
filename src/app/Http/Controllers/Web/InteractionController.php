<?php

namespace VCComponent\Laravel\Interaction\Http\Controllers\Web;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use VCComponent\Laravel\Interaction\Repositories\InteractionInterface;
use VCComponent\Laravel\Interaction\Validators\InteractionValidator;

class InteractionController extends BaseController
{
    protected $validator;
    protected $repository;
    public function __construct(InteractionValidator $validator, InteractionInterface $repository)
    {
        $this->validator = $validator;
        $this->repository = $repository;
    }
    public function createOrUpdate(Request $request)
    {
        $this->validator->isValid($request, 'RULE_CREATE');
        $interaction = $this->repository->createOrUpdate($request->all());
        $item = $interaction->resource($interaction->resource_type)->first();
        return view('interaction.show', compact('item'));
    }
    public function destroy(Request $request)
    {

        $interaction = $this->repository->delete($request->id);

        $item = $interaction->resource($interaction->resource_type)->first();
        return view('interaction.show', compact('item'));

    }
}
