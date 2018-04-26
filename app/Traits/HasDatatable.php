<?php

namespace App\Traits;

trait HasDatatable
{
    /**
     * Get Datatable Fields to be display.
     *
     * @return array
     */
    public function getDatatableFields(): array
    {
        if (! isset($this->datatable)) {
            return ['*'];
        }

        return $this->datatable;
    }

    /**
     * Datatable scope.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeDatatable($query)
    {
        return $query->select($this->getDatatableFields());
    }
}
