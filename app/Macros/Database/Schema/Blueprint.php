<?php

namespace OSI\Macros\Database\Schema;

use OSI\Contracts\MacroContract;
use Illuminate\Database\Schema\Blueprint as DefaultBlueprint;

/**
 * Extended Blueprint by using Macro
 */
class Blueprint implements MacroContract
{
    /**
     * Register Macros
     *
     * @void
     */
    public static function registerMacros()
    {
        DefaultBlueprint::macro('addForeign', function ($key, $table) {
            $this->unsignedInteger($key)
                ->index()
                ->nullable();
        });

        DefaultBlueprint::macro('fkDeleteCascade', function ($key, $table) {
            $this->foreign($key)
                ->references('id')
                ->on($table)
                ->onDelete('cascade');
        });

        DefaultBlueprint::macro('addAcceptance', function ($value) {
            $this->boolean('is_' . $value)->default(false);
            $this->datetime($value . '_at')->nullable();
            $this->integer($value . '_by')->nullable();
            $this->text($value . '_remarks')->nullable();
        });

        DefaultBlueprint::macro('hashslug', function () {
            $this->string('hashslug')->nullable()->unique();
        });

        DefaultBlueprint::macro('slug', function () {
            $this->string('slug')->nullable()->unique();
        });

        DefaultBlueprint::macro('label', function () {
            $this->string('label')->nullable();
            $this->string('name')->nullable();
        });

        DefaultBlueprint::macro('expired', function () {
            $this->boolean('is_expired')->default(false);
            $this->datetime('expired_at')->nullable();
        });

        DefaultBlueprint::macro('user', function () {
            $this->addForeign('user_id', 'users');
            $this->fkDeleteCascade('user_id', 'users');
        });

        DefaultBlueprint::macro('amount', function ($label = 'amount') {
            $this->bigInteger($label)->nullable()->default(0);
        });

        DefaultBlueprint::macro('smallAmount', function ($label = 'amount') {
            $this->integer($label)->nullable()->default(0);
        });

        DefaultBlueprint::macro('reference', function () {
            $this->string('reference')->nullable()->unique()->index();
        });

        DefaultBlueprint::macro('standardTime', function () {
            $this->softDeletes();
            $this->timestamps();
        });
    }
}
