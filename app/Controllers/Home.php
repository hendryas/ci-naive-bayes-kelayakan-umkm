<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('home/home_page');
    }

    public function formRegistration(): string
    {
        return view('home/form_registration_page');
    }
}
