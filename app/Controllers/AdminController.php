<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AlumnoModel;

class AdminController extends BaseController
{
    protected $helpers = ['form'];

    public function __construct()
{
    if (!session()->has('user')) {
        return redirect()->to('/login');
    }
}

    public function mostrarAlumno()
    {
        $alumnoModel = model('AlumnoModel'); //Se toma el modelo que contiene los datos del alumno directamente de la base de datos
        $data['alumnos'] = $alumnoModel->findAll(); //Se establece la variable "alumnos" para posteriormente usarla en la vista
    
        return 
            view('common/head') .
            view('common/menuAdAlumno') .
            view('admin/mostrarAlumno', $data) . //se pasan los datos que se recibe del modelo para mostrarlos en la vista
            view('common/footer');
    }

    public function deleteAlumno($id){ //Se tomo como parametro el id de nuestra tabla 
        $alumnoModel = model('AlumnoModel'); //Se toma el modelo que contiene los datos del alumno directamente de la base de datos
        $alumnoModel->delete($id); //Se eliminiara el los datos del id que se este tomando 
        return redirect()->to('admin/mostrarAlumno');
    }

    public function agregarAlumno(){
        helper(['form', 'url']);

        $validation =  \Config\Services::validation();
        
        if ((strtolower($this->request->getMethod()) !== 'get')) {
    
        return 
        view('common/head') .
        view('common/menuAdAlumno') .
        view('admin/agregarAlumno') .
        view('common/footer');
        }

        $rules = [];

        if (! $this->validate($rules)) {
        return 
        view('common/head') .
        view('common/menuAdAlumno') .
        view('admin/agregarAlumno', ['validation' => $validation]) .
        view('common/footer');
        }
    }

    public function insertAlumno(){
        $alumnoModel = model('AlumnoModel');
        $data = [
            "nombre" => $_POST['nombre'],
            "aPaterno" => $_POST['aPaterno'],
            "aMaterno" => $_POST['aMaterno'],
            "numeroControl" => $_POST['numeroControl'],
            "fechaN" => $_POST['fechaN'],
            "calle" => $_POST['calle'],
            "colonia" => $_POST['colonia'],
            "numero" => $_POST['numero'],
            "municipio" => $_POST['municipio'],
            "ciudad" => $_POST['ciudad'],
            "estado" => $_POST['estado'],
            "grado" => $_POST['grado'],
            "grupo" => $_POST['grupo']
        ];
        $alumnoModel->insert($data, false);
        return redirect('admin/mostrarAlumno', 'refresh');
    }

    public function editarAlumno($id){

        $alumnoModel = model('AlumnoModel');
        $data['alumno'] = $alumnoModel->find($id);

        return 
        view('common/head') .
        view('common/menuAdAlumno') .
        view('admin/editarAlumno', $data) .
        view('common/footer');
    }

    public function updateAlumno(){

        $alumnoModel = model('AlumnoModel');

        $data = [
            "nombre" => $this->request->getVar('nombre'),
            "aPaterno" => $this->request->getVar('aPaterno'),
            "aMaterno" => $this->request->getVar('aMaterno'),
            "numeroControl" => $this->request->getVar('numeroControl'),
            "fechaN" => $this->request->getVar('fechaN'),
            "calle" => $this->request->getVar('calle'),
            "colonia" => $this->request->getVar('colonia'),
            "numero" => $this->request->getVar('numero'),
            "municipio" => $this->request->getVar('municipio'),
            "ciudad" => $this->request->getVar('ciudad'),
            "estado" => $this->request->getVar('estado'),
            "grado" => $this->request->getVar('grado'),
            "grupo" => $this->request->getVar('grupo'),


        ];

        $alumnoModel->update($_POST['id'],$data);
        return redirect('admin/mostrarAlumno');
    }

    public function buscarAlumno()
    {
        $alumnoModel = model('AlumnoModel');
    
        if (isset($_GET['nombre'])) {
            $nombre = $_GET['nombre'];
            $numeroControl = $_GET['numeroControl'];
            $grado = $_GET['grado'];  
            $grupo = $_GET['grupo']; 
    
            $data['alumnos'] = $alumnoModel->buscarAlumnos($nombre, $numeroControl, $grado, $grupo);
        } else {
            $data['alumnos'] = $alumnoModel->findAll();
        }
    
        return view('common/head') .
            view('common/menuAdAlumno') .
            view('admin/buscarAlumno', $data) .
            view('common/footer');
    }
    

    //Funciones del maestro 

    public function mostrarMaestro()
    {
        $maestroModel = model('MaestroModel');
        $data['maestros'] = $maestroModel->findAll();
    
        return 
            view('common/head') .
            view('common/menuAdMaestro') .
            view('admin/mostrarMaestro', $data) .
            view('common/footer');
    }

    public function buscarMaestro()
    {
        $maestroModel = model('MaestroModel');

        if (isset($_GET['nombre'])) {
            $nombre = $_GET['nombre'];
            $matricula = $_GET['matricula'];
        $data['maestros'] = $maestroModel->buscarMaestro($nombre, $matricula);
        } else {
            $nombre = "";
            $data['maestros'] = $maestroModel->findAll();
        }

        return 
            view('common/head') .
            view('common/menuAdMaestro') .
            view('admin/buscarMaestro', $data) .
            view('common/footer');
    }
    
    public function deleteMaestro($id)
    {
        $maestroModel = model('MaestroModel');
        $maestroModel->delete($id);
        return redirect()->to('admin/mostrarMaestro');
    }

    public function agregarMaestro(){
        helper(['form', 'url']);

        $validation =  \Config\Services::validation();
        
        if ((strtolower($this->request->getMethod()) !== 'get')) {
    
        return 
        view('common/head') .
        view('common/menuAdMaestro') .
        view('admin/agregarMaestro') .
        view('common/footer');
        }

        $rules = [];

        if (! $this->validate($rules)) {
        return 
        view('common/head') .
        view('common/menuAdMaestro') .
        view('admin/agregarMaestro', ['validation' => $validation]) .
        view('common/footer');
        }
    }

    public function insertMaestro(){
        $maestroModel = model('MaestroModel');
        $data = [
            "nombre" => $_POST['nombre'],
            "aPaterno" => $_POST['aPaterno'],
            "aMaterno" => $_POST['aMaterno'],
            "calle" => $_POST['calle'],
            "colonia" => $_POST['colonia'],
            "numero" => $_POST['numero'],
            "municipio" => $_POST['municipio'],
            "ciudad" => $_POST['ciudad'],
            "estado" => $_POST['estado'],
            "matricula" => $_POST['matricula'],
            "telefono" => $_POST['telefono']
        ];
        $maestroModel->insert($data, false);
        return redirect()->to('admin/mostrarMaestro');
    }


    public function editarMaestro($id){
        $maestroModel = model('MaestroModel');
        $data['maestro'] = $maestroModel->find($id);
    
        return view('common/head') .
            view('common/menuAdMaestro') .
            view('admin/editarMaestro', $data) .
            view('common/footer');
    }
    

    public function updateMaestro(){

        $maestroModel = model('MaestroModel');

        $data = [
            "nombre" => $this->request->getVar('nombre'),
            "aPaterno" => $this->request->getVar('aPaterno'),
            "aMaterno" => $this->request->getVar('aMaterno'),
            "calle" => $this->request->getVar('calle'),
            "colonia" => $this->request->getVar('colonia'),
            "numero" => $this->request->getVar('numero'),
            "municipio" => $this->request->getVar('municipio'),
            "ciudad" => $this->request->getVar('ciudad'),
            "estado" => $this->request->getVar('estado'),
            "matricula" => $this->request->getVar('matricula'),
            "telefono" => $this->request->getVar('telefono'),


        ];

        $maestroModel->update($_POST['id'],$data);
        return redirect('admin/mostrarMaestro');
    }


    //Funciones de la materia

    public function mostrarMateria(){
        $materiaModel = model('MateriaModel');
        $data['materias'] = $materiaModel->findAll();
        return 
        view('common/head') .
        view('common/menuAdMateria') .
        view('admin/mostrarMateria',$data) .
        view('common/footer');
    }

    public function agregarMateria(){
        helper(['form', 'url']);

        $validation =  \Config\Services::validation();
        
        if ((strtolower($this->request->getMethod()) !== 'get')) {
    
        return 
        view('common/head') .
        view('common/menuAdMateria') .
        view('admin/agregarMateria') .
        view('common/footer');
        }

        $rules = [];

        if (! $this->validate($rules)) {
        return 
        view('common/head') .
        view('common/menuAdMateria') .
        view('admin/agregarMateria', ['validation' => $validation]) .
        view('common/footer');
        }
    }

    public function insertMateria(){
        $materiaModel = model('MateriaModel');
        $data = [
            "nombre" => $_POST['nombre'],
            "nombreCorto" => $_POST['nombreCorto'],
            "clave" => $_POST['clave'],
            "unidades" => $_POST['unidades']
        ];
        $materiaModel->insert($data, false);
        return redirect('admin/mostrarMateria');
    }


    public function deleteMateria($id)
    {
        $materiaModel = model('MateriaModel');
        $materiaModel->delete($id);
        return redirect()->to('admin/mostrarMateria');
    }

    public function editarMateria($id){

        $materiaModel = model('MateriaModel');
        $data['materia'] = $materiaModel->find($id);

        return 
        view('common/head') .
        view('common/menuAdMateria') .
        view('admin/editarMateria', $data) .
        view('common/footer');
    }

    public function updateMateria(){

        $materiaModel = model('MateriaModel');

        $data = [
            "nombre" => $this->request->getVar('nombre'),
            "nombreCorto" => $this->request->getVar('nombreCorto'),
            "clave" => $this->request->getVar('clave'),
            "unidades" => $this->request->getVar('unidades'),
        ];

        $materiaModel->update($_POST['id'],$data);
        return redirect()->to('admin/mostrarMateria');
    }

    public function buscarMateria(){

        $materiaModel = model('MateriaModel');

        if (isset($_GET['nombre'])) {
            $nombre = $_GET['nombre'];
            $nombreCorto = $_GET['nombreCorto'];
        $data['materias'] = $materiaModel->buscarMateria($nombre, $nombreCorto);
        } else {
            $nombre = "";
            $data['materias'] = $materiaModel->findAll();
        }


        return 
            view('common/head') .
            view('common/menuAdMateria') .
            view('admin/buscarMateria', $data) .
            view('common/footer');
    }
}
