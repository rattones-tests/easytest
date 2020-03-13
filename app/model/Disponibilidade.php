<?php
namespace app\model;

use core\system\Dao;

class Disponibilidade extends Dao
{
    public $tableName= 'disponibilidade';
    public $keys= ['id'];
    
    public function __construct()
    {
        parent::__construct();
    }
}