<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'admin';
    protected $primaryKey = 'id'; 
    protected $allowedFields = ['usuario', 'contrasena', 'created_at', 'updated_at', 'deleted_at'];
    protected $useTimestamps = true;

    // ... otros métodos y propiedades si es necesario

    public function authenticate($usuario, $contrasena)
    {
        // Utiliza password_hash para almacenar contraseñas de manera segura
        $admin = $this->where('usuario', $usuario)
                      ->first();

        if ($admin && password_verify($contrasena, $admin['contrasena'])) {
            // Las credenciales son válidas
            return $admin;
        } else {
            // Credenciales incorrectas
            return null;
        }
    }
}
