<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $login = true;
        if ($login === true)
            return view('dashboard/index');
        else
            return redirect()->to('/login');
    }
    public function aea($modulo = 'pacientes')
    {
        echo view('dashboard/header') . view('dashboard/main', ['content' => view('modulos/' . $modulo), 'modulo' => $modulo]) . view('dashboard/footer');
    }
}
