<?php

namespace App\Blade;

use Illuminate\Support\Facades\Blade;

class Components
{
    public static function make()
    {
        return new self();
    }

    public function register()
    {
        $this->cards();
        $this->collapse();
        $this->modals();
        $this->pages();
        $this->tabs();
    }

    private function cards()
    {
        Blade::component('components.card');
        Blade::component('components.cards.figure', 'cardFigure');
    }

    private function collapse()
    {
        Blade::component('components.collapse.container', 'collapseContainer');
        Blade::component('components.collapse.content', 'collapseContent');
    }

    private function modals()
    {
        Blade::component('components.modals.base', 'modalBase');
        Blade::component('components.modals.button', 'modalButton');
    }

    private function pages()
    {
        Blade::component('components.modals.pages', 'pageTitle');
    }

    private function tabs()
    {
        Blade::component('components.tab.content', 'tabContent');
        Blade::component('components.tab.navigation', 'tabNavigation');
        Blade::component('components.actions');
    }
}
