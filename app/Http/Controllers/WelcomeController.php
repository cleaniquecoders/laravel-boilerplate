<?php

namespace OSI\Http\Controllers;

class WelcomeController extends Controller
{
    public function __invoke()
    {
        return view('welcome');
    }
}
