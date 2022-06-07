<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function index()
    {
        return view('layouts/main');
    }
    public function diseno()
    {
        return view('pages/switcher');
    }
}
