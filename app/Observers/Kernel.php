<?php

namespace App\Observers;

class Kernel
{
    /**
     * Make this class.
     *
     * @return \App\Observers\Kernel
     */
    public static function make()
    {
        return new self();
    }

    /**
     * Register observers.
     */
    public function observes()
    {
        foreach (config('observers') as $observer => $models) {
            foreach ($models as $model) {
                if (class_exists($model) && class_exists($observer)) {
                    $model::observe($observer);
                }
            }
        }
    }
}
