<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Inicio extends Controller
{
    public function index()
    {
        return view('inicio'); //Solo se mostrara la vista del inicio del administrador
    }

    public function menu()
    {
        return  
        view('common/menu') . //jala el menu establecido para el administrador
        view('menu/menuAdAlumno');//muestra la vista del menu para administrar a los alumnos

    }

    public function menuMaestro()
    {
        return 
        view('common/menu') . //jala el menu establecido para el administrador
        view('menu/menuAdMaestro');//muestra la vista del menu para administrar las funciones del maestro
    }

    public function menuMateria()
    {
        return 
        view('common/menu') . //jala el menu establecido para el administrador
        view('menu/menuAdMateria');//muestra la vista del menu para administrar las funciones de las materias
    }
}
