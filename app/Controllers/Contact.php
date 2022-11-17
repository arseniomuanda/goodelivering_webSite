<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\EmployeeModel;

class Contact extends ResourceController
{
    public function index()
    {
        $header =
        [
            "page" => "contact"
        ];
        return view('template/header2', $header). view('telas/contact'). view('template/footer');
    }
    public function indexpt()
    {
        $header =
        [
            "page" => "contact"
        ];
        return view('pt/template/header2', $header). view('pt/telas/contact'). view('pt/template/footer');
    }

    public function sendMail()
    {

        $email = \Config\Services::email();

        $emissorEmail = $this->request->getPost('email');
        $emissorName = $this->request->getPost('name');
        $emissorSubject = $this->request->getPost('subject');
        $emissorMessage = $this->request->getPost('message');

        $email->setFrom($emissorEmail, 'Costumer - ' . $emissorName);
        $email->setTo("info@goodelivering.com");
        // $email->setCC('operations@goodelivering.com');
        // $email->setBCC('paulocazo@goodelivering.com');

        $email->setSubject($emissorSubject);
        $email->setMessage($emissorMessage);
        if ($email->send()) {
            return $this->respond([
                'message' => 'OK'
            ], 200);
        } else {
            echo "Gato";
        }
    }
}
