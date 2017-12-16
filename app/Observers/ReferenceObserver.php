<?php

namespace OSI\Observers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

/**
 * See events
 * @href https://laravel.com/docs/5.5/eloquent#events
 * Available metthods: retrieved, creating, created, updating, updated,
 * saving, saved, deleting, deleted, restoring, restored
 */
class ReferenceObserver
{
    /**
     * Listen to the created event.
     *
     * @param  Model $DummyModelVariable
     * @return void
     */
    public function created(Model $model)
    {
        if (Schema::hasColumn($model->getTable(), 'reference') && is_null($model->reference)) {

            $count = $model::count();

            $reference = isset($model->reference_prefix) ?
            generate_reference($model->reference_prefix, $count) :
            generate_reference(config('document.prefix'), $count);

            $model->reference = $reference;
        }
    }
}
