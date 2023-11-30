<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AlumnoModel;

class AlumnoController extends BaseController
{

    public function __construct()
{
    if (!session()->has('user')) {
        return redirect()->to('/login');
    }
}
    public function informacion(){

        $id = session()->get('id');
        $alumnoModel = model('AlumnoModel');
        $data['usuario'] = $alumnoModel->find($id);

        return 
        view('common/head') .
        view('common/menuAlum') .
        view('alumno/informacion') .
        view('common/footer');

    }

    public function calificacionesAlumno(){
        $calificacionModel = model('CalificacionModel');
        $data['calificaciones'] = $calificacionModel->findAll();
        return 
        view('common/head') .
        view('common/menuAlum') .
        view('alumno/calificacionesAlumno',$data) .
        view('common/footer');
    }
}