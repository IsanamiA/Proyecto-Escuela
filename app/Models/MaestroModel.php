<?php

namespace App\Models;

use CodeIgniter\Model;

class MaestroModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'maestros';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = true;
    protected $protectFields    = false;
    protected $allowedFields    = ['usuario', 'contraseña', 'nombre', 'aPaterno', 'aMaterno', 'calle', 'colonia', 'numero', 'municipio', 'ciudad', 'estado', 'matricula', 'telefono'];

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


    //funcion para poder buscar maestros:
    
    public function buscarMaestro($nombre, $matricula)
    {
        return $this->like('nombre', $nombre)
                    ->like('matricula', $matricula)
                    ->findAll();
    }
}

