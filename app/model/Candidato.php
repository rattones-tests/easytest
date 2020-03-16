<?php
namespace app\model;

use core\system\Dao;

class Candidato extends Dao
{
    public $tableName= "candidato";
    public $keys= ['uid'];

    public function __construct()
    {
        parent::__construct();
    }
}