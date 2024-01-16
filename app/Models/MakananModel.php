<?php

namespace App\Models;

use CodeIgniter\Model;

class MakananModel extends Model
{
    protected $table = "tbl_makanan";
    protected $primaryKey = "id_makanan";
    protected $returnType = "object";
    protected $useTimestamps = false;
    protected $allowedFields = ['nama_makanan', 'harga', 'stok', 'foto', 'id_user', 'type_user'];
    
    public function getDataByIdUser($id_user)
    {
        // Tambahkan klausa WHERE pada query untuk memfilter berdasarkan id_user
        return $this->where('id_user', $id_user)->findAll();
    }
}