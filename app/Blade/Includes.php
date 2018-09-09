<?php

namespace App\Blade;

use Illuminate\Support\Facades\Blade;

class Includes
{
    public static function make()
    {
        return new self();
    }

    public function register()
    {
        $this->forms();
        $this->miscs();
    }

    private function forms()
    {
        Blade::include('components.forms.assets.datetimepicker', 'assetDatetimepicker');
        Blade::include('components.forms.assets.dropzone', 'assetDropzone');
        Blade::include('components.forms.assets.select2', 'assetSelect2');
        Blade::include('components.forms.assets.textarea', 'assetTextarea');
        Blade::include('components.forms.checkbox');
        Blade::include('components.forms.datetimepicker');
        Blade::include('components.forms.file');
        Blade::include('components.forms.hidden');
        Blade::include('components.forms.input');
        Blade::include('components.forms.radio');
        Blade::include('components.forms.selectmultiple');
        Blade::include('components.forms.select');
        Blade::include('components.forms.checkbox');
        Blade::include('components.forms.submit');
        Blade::include('components.forms.switch');
        Blade::include('components.forms.textarea');
    }

    private function miscs()
    {
        Blade::include('components.app-name', 'appName');
        Blade::include('components.logo');
        Blade::include('components.avatar');
        Blade::include('components.datatable');
        Blade::include('components.popover');
        Blade::include('components.table');
        Blade::include('components.tooltip');
    }
}
