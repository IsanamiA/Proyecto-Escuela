<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class MaestroController extends BaseController
{
    public function index()
    {
        //
    }
    
    public function __construct()
{
    if (!session()->has('user')) {
        return redirect()->to('/login');
    }
}

        public function informacion(){

            $id = session()->get('id');
            $maestroModel = model('MaestroModel');
            $data['maestro'] = $maestroModel->find($id);

        return 
            view('common/head') .
            view('common/menuMaestro') .
            view('maestro/informacion') .
            view('common/footer');
        }

        public function mostrar(){
            $calificacionModel = model('CalificacionModel');
            $data['calificaciones'] = $calificacionModel->findAll();
            return 
            view('common/head') .
            view('common/menuAdCalificaciones') .
            view('maestro/mostrarCalificaciones',$data) .
            view('common/footer');
        }

        public function agregar(){
            helper(['form', 'url']);
    
            $validation =  \Config\Services::validation();
            
            if ((strtolower($this->request->getMethod()) !== 'get')) {
        
            return 
            view('common/head') .
            view('common/menuAdCalificaciones') .
            view('maestro/agregarCalificaciones') .
            view('common/footer');
            }
    
            $rules = [];
    
            if (! $this->validate($rules)) {
            return 
            view('common/head') .
            view('common/menuAdCalificaciones') .
            view('maestro/agregarCalificaciones', ['validation' => $validation]) .
            view('common/footer');
            }
        }
    
        public function insert(){
            $calificacionModel = model('CalificacionModel');
            $data = [
                "alumno" => $_POST['alumno'],
                "español" => $_POST['español'],
                "matematicas" => $_POST['matematicas'],
                "historia" => $_POST['historia'],
                "civismo" => $_POST['civismo'],
                "edFisica" => $_POST['edFisica'],
                "geografia" => $_POST['geografia'],
                "ciencias" => $_POST['ciencias']
            ];
            $calificacionModel->insert($data, false);
            return redirect()->to('maestro/mostrarCalificaciones');
        }
    
        public function editar($id){
    
            $calificacionModel = model('CalificacionModel');
            $data['calificacion'] = $calificacionModel->find($id);
    
            return 
            view('common/head') .
            view('common/menuAdCalificaciones') .
            view('maestro/editarCalificacion', $data) .
            view('common/footer');
        }
    
        public function update(){
    
            $calificacionModel = model('CalificacionModel');
    
            $data = [
                "alumno" => $this->request->getVar('alumno'),
                "español" => $this->request->getVar('español'),
                "matematicas" => $this->request->getVar('matematicas'),
                "historia" => $this->request->getVar('historia'),
                "civismo" => $this->request->getVar('civismo'),
                "edFisica" => $this->request->getVar('edFisica'),
                "geografia" => $this->request->getVar('geografia'),
                "ciencias" => $this->request->getVar('ciencias'),
            ];
    
            $calificacionModel->update($_POST['id'],$data);
            return redirect('maestro/mostrarCalificaciones', 'refresh');
        }
}