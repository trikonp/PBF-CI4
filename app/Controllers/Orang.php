<?php

namespace App\Controllers;

use App\Models\ModelOrang;

class Orang extends BaseController
{
    protected $orangModel;
    public function __construct()
    {
        $this->orangModel = new ModelOrang();
    }
    public function index()
    {

        $data = [
            'orang' => $this->orangModel->getOrang()
        ];


        echo view('layout/header', $data);
        echo view('orang/index');
        echo view('layout/footer');
    }
}
