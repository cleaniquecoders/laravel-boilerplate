<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function __invoke(Request $request, $language)
    {
        app()->setLocale($language);

        swal()->success(
            __('Language'),
            __('Current application language has been set to ') . __(strtoupper($language))
        );

        return redirect()->back();
    }
}
