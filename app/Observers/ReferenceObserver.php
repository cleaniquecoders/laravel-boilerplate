<?php

namespace App\Observers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

/**
 * See events.
 *
 * @href https://laravel.com/docs/5.5/eloquent#events
 * Available metthods: retrieved, creating, created, updating, updated,
 * saving, saved, deleting, deleted, restoring, restored
 */
class ReferenceObserver
{
    /**
     * Listen to the creating event.
     *
     * @param \Illuminate\Database\Eloquent\Model $model
     */
    public function creating(Model $model)
    {
        $count = method_exists($model, 'getCounter') ? $model->getCounter() : ($model::count() ?? 0);

        $column = method_exists($model, 'getReferenceColumn') ? $model->getReferenceColumn() : 'reference';

        $prefix = method_exists($model, 'referencePrefix') ? $model->referencePrefix() : config('document.prefix');

        if (Schema::hasColumn($model->getTable(), $column) && is_null($model->$column)) {
            $model->$column = generate_reference($prefix, $count);
        }
    }
}
