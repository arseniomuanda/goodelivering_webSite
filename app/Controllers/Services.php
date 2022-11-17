<?php

namespace App\Controllers;

class Services extends BaseController
{
    // public function index()
    // {
    //     $header =
    //     [
    //         "page" => "services"
    //     ];
    //     return view('template/header2', $header). view('telas/services'). view('template/footer');
    // }

    public function generalprocurement()
    {
        $header =
        [
            "page" => "services"
        ];
        return view('template/header2', $header) . view('telas/services/generalprocurement') . view('template/footer');
    }
    public function generalprocurementpt()
    {
        $header =
        [
            "page" => "services"
        ];
        return view('pt/template/header2', $header) . view('pt/telas/services/generalprocurement') . view('pt/template/footer');
    }



    public function logisticsservices()
    {
        $header =
        [
            "page" => "services"
        ];
        return view('template/header2', $header) . view('telas/services/logisticsservices') . view('template/footer');
    }
    public function logisticsservicespt()
    {
        $header =
        [
            "page" => "services"
        ];
        return view('pt/template/header2', $header) . view('pt/telas/services/logisticsservices') . view('pt/template/footer');
    }

    public function technicalengineering()
    {
        $header =
        [
            "page" => "services"
        ];
        return view('template/header2', $header) . view('telas/services/technicalengineering') . view('template/footer');
    }
    public function technicalengineeringpt()
    {
        $header =
        [
            "page" => "services"
        ];
        return view('pt/template/header2', $header) . view('pt/telas/services/technicalengineering') . view('pt/template/footer');
    }

    public function visaapplication()
    {
        $header =
        [
            "page" => "services"
        ];
        return view('template/header2', $header) . view('telas/services/visaapplication') . view('template/footer');
    }
    public function visaapplicationpt()
    {
        $header =
        [
            "page" => "services"
        ];
        return view('pt/template/header2', $header) . view('pt/telas/services/visaapplication') . view('pt/template/footer');
    }

    public function manpower()
    {
        $header =
        [
            "page" => "services"
        ];
        return view('template/header2', $header) . view('telas/services/manpower') . view('template/footer');
    }
    public function manpowerpt()
    {
        $header =
        [
            "page" => "services"
        ];
        return view('pr/template/header2', $header) . view('pr/telas/services/manpower') . view('pr/template/footer');
    }
}
