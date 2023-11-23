<?php

namespace App\Models;

use CodeIgniter\Model;

class AmbienteModel extends Model
{
    protected $table = 'ambientes';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'nome_ambiente','localizacao', 'problema']; // Updated field names
    protected $returnType = 'object';

    public function insertAmbiente($data)
    {
        $this->db->table($this->table)->insert($data);
    }

    // Add other methods as needed for your "ambientes" table
}
