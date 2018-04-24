<?php

namespace App\Observers;

class Kernel
{
    /**
     * Single one-on-one observer.
     *
     * @var array
     */
    protected $observers = [
        // FQCN of Model => FQCN of Observer
    ];

    /**
     * One observer observed by many models.
     *
     * @var array
     */
    protected $observeBy = [
        \App\Observers\ReferenceObserver::class => [
        ],
        \App\Observers\HashidsObserver::class => [
            \App\Models\User::class,
            \Spatie\MediaLibrary\Media::class,
        ],
    ];

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
        $this->observeSingle();
        $this->observeBy();
    }

    /**
     * Observe One-on-One Model-Observer.
     */
    private function observeSingle()
    {
        if (count($this->observers) > 0) {
            foreach ($this->observers as $model => $observer) {
                if (class_exists($model) && class_exists($observer)) {
                    $model::observe($observer);
                }
            }
        }
    }

    /**
     * One observer observed by many models.
     */
    private function observeBy()
    {
        if (count($this->observeBy) > 0) {
            foreach ($this->observeBy as $observer => $models) {
                foreach ($models as $model) {
                    if (class_exists($model) && class_exists($observer)) {
                        $model::observe($observer);
                    }
                }
            }
        }
    }
}
