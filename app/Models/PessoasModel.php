<?php

namespace App\Model;

use CodeIgniter\Model;

class PessoasModel extends Model{
    protected $table      = 'tb_pessoas';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nome', 'profissao', 'idade'];

    public function getPessoas(){
        return $this->findAll();
    }
}
