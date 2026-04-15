<?php

namespace App\Controllers;

class Tareas extends BaseController
{
    public function index()
    {
        return view('tareas/index');
    }
}
