<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $header =
        [
            "page" => "home"
        ];
        return view('template/header', $header). view('telas/home'). view('template/footer');
    }

    public function indexpt()
    {
        $header =
        [
            "page" => "home"
        ];
        return view('pt/template/header', $header). view('pt/telas/home'). view('pt/template/footer');
    }
}
