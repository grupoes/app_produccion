<?php

namespace App\Controllers;

class Clientes extends BaseController
{
    public function potencial_cliente()
    {
        return view('clientes/potencial_cliente');
    }

    public function registrar_potencial_cliente()
    {
        return view('clientes/registrar_potencial_cliente');
    }
}
