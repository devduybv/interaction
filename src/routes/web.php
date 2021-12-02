<?php
Route::middleware('web')->group(function () {
    Route::get('interaction', 'VCComponent\Laravel\Interaction\Http\Controllers\Web\InteractionController@createOrUpdate');
    Route::get('interactionDelete', 'VCComponent\Laravel\Interaction\Http\Controllers\Web\InteractionController@destroy');

});
