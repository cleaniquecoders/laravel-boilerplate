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
class HashidsObserver
{
    /**
     * Listen to the created event.
     *
     * @param  DummyModelClass $DummyModelVariable
     * @return void
     */
    public function creating(Model $model)
    {
        // we only create this once
        if (Schema::hasColumn($model->getTable(), 'hashslug') && is_null($model->hashslug)) {
            $timestamp       = time() + $model->count() + 1;
            $str_slug_fqcn   = str_slug_fqcn($model);
            $model->hashslug = hashids($str_slug_fqcn)->encode($timestamp);
        }
    }
}
