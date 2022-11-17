<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index()
    {
        $header =
        [
            "page" => "about"
        ];
        return view('template/header2', $header). view('telas/about'). view('template/footer');
    }

    public function indexpt()
    {
        $header =
        [
            "page" => "about"
        ];
        return view('pt/template/header2', $header). view('pt/telas/about'). view('pt/template/footer');
    }
}
