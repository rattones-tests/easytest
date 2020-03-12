<?php 
namespace app\model;

use core\system\Dao;

class Habilidade extends Dao
{
    public $tableName= 'habilidade';
    public $keys= ['id'];
    
    public function __construct()
    {
        parent::__construct();
    }
}