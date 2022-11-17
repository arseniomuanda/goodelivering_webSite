<?php

namespace App\Controllers;

class Team extends BaseController
{
    public function index()
    {
        $header =
        [
            "page" => "team"
        ];
        return view('template/header2', $header). view('telas/team'). view('template/footer');
    }
    public function indexpt()
    {
        $header =
        [
            "page" => "team"
        ];
        return view('pt/template/header2', $header). view('pt/telas/team'). view('pt/template/footer');
    }
}
