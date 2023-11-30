<?php

namespace App\Models;

use CodeIgniter\Model;

class AlumnoModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'alumnos';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = true;
    protected $protectFields    = false;
    protected $allowedFields    = ['usuario', 'contraseña', 'nombre', 'aPaterno', 'aMaterno', 'numeroControl', 'fechaN', 'calle', 'colonia', 'numero', 'municipio', 'ciudad', 'estado', 'grado', 'grupo'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function buscarAlumnos($nombre, $numeroControl, $grado, $grupo)
    {
        return $this->like('nombre', $nombre)
                    ->like('numeroControl', $numeroControl)
                    ->like('grado', $grado)
                    ->like('grupo', $grupo)
                    ->findAll();
    }    
}