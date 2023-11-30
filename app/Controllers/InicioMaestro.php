<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class InicioMaestro extends Controller
{
    public function index()
    {
        return view('inicioMaestro');//muestra el inciio del maestrp
    }

    public function menuCalificaciones()
    {
        return  
        view('common/menuMaestro') . //jala el menu establecido para el maestro
        view('menu/menuAdCalificaciones');//muestra un meno para la administracion de las calificaciones

    }
}
