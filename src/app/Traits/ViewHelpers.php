<?php

namespace VCComponent\Laravel\Interaction\Traits;

use Session;
use VCComponent\Laravel\Interaction\Entities\View;

trait ViewHelpers
{

    private function handle($item)
    {
        $viewed = Session::get($item->getTable(), []);
        if (!in_array($item->id, $viewed)) {
            $view = View::where(['resource_type' => $item->getTable(), 'resource_id' => $item->id])->first();
            if (empty($view)) {
                View::create([
                    'resource_type' => $item->getTable(),
                    'resource_id' => $item->id,
                    'count' => 1,
                ]);
            } else {
                View::updated([
                    'count' => $view->increment('count'),
                ]);
            }
            Session::push($item->getTable(), $item->id);
        }
    }
}
