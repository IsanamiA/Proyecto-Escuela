<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class InicioAlumno extends Controller
{
    public function index()
    {
        return view('inicioAlumno');//muestra el inicio del alumno
    }
}
