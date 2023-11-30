<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AdminModel;
use App\Models\MaestroModel;
use App\Models\AlumnoModel;

class AuthController extends Controller
{
    public function login()
    {
        $session = session();

        $adminModel = new AdminModel();
        $maestroModel = new MaestroModel();
        $alumnoModel = new AlumnoModel();

        $usuario = $this->request->getPost('usuario');
        $contraseña = $this->request->getPost('contraseña');

        // Intenta autenticar como admin
        $admin = $adminModel
                            ->where('usuario', $usuario)
                           ->where('contraseña', $contraseña)
                           ->first();

        // Intenta autenticar como maestro
        $maestro = $maestroModel
                                ->where('usuario', $usuario)
                               ->where('contraseña', $contraseña)
                               ->first();

        // Intenta autenticar como alumno
        $alumno = $alumnoModel
                            ->where('usuario', $usuario)
                             ->where('contraseña', $contraseña)
                             ->first();

        // Lógica para redirigir según el perfil del usuario
        if ($admin) {
            // Redireccionar a la vista del administrador
            return redirect()->to('inicio');
        } elseif ($maestro) {
            $newdata = ['maestro'=>$maestro];
            $session->set($newdata);
            // Redireccionar a la vista del maestro
            return redirect()->to('inicioMaestro');
        } elseif ($alumno) {
            $newdata = ['alumno'=>$alumno];
            $session->set($newdata);
            // Redireccionar a la vista del alumno
            return redirect()->to('inicioAlumno');
        } else {
            // Credenciales incorrectas, manejar el error
            return redirect()->to('/')->with('error', 'Credenciales incorrectas');
        }
    }

    public function inicioAlumno()
    {
        $session = session();
        $alumno = $session->get('alumno');
    
        $calificacionModel = new CalificacionModel();
        $data['calificaciones'] = $calificacionModel
            ->where('alumno', $alumno->numeroControl)
            ->findAll();
    
        return view('calificaciones/alumno', $data);
    }
    
}
