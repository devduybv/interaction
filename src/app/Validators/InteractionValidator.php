<?php

namespace VCComponent\Laravel\Interaction\Validators;

use VCComponent\Laravel\Vicoders\Core\Validators\AbstractValidator;
use VCComponent\Laravel\Vicoders\Core\Validators\ValidatorInterface;

class InteractionValidator extends AbstractValidator
{
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'resource_type' => ['required'],
            'resource_id' => ['required', 'numeric'],
            'user_id' => ['required', 'numeric'],
            'status' => ['required', 'numeric', 'in:1,2'],
        ],
    ];
}
