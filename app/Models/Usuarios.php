<?php

namespace App\Models;

use CodeIgniter\Model;

class Usuarios extends Model
{
    
    protected $table = 'usuarios';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'object';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields =
    ['nombres','apellidos','rut','email','username','password','rol_id','estado'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    // Validation
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert = [];
    protected $afterInsert = [];
    protected $beforeUpdate = [];
    protected $afterUpdate = [];
    protected $beforeFind = [];
    protected $afterFind = [];
    protected $beforeDelete = [];
    protected $afterDelete = [];

    public function obtenerUsuario($data) {
        $Usuario = $this->db->table('usuarios');
        $Usuario->where($data);
        return $Usuario->get()->getResultArray();
    }

    public function register($data) {
        $Usuario = $this->db->table('usuarios');
        $Usuario->insert($data);
        return true;
    }


}