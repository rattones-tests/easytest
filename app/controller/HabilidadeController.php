<?php
namespace app\controller;

use app\model\Habilidade;
use core\system\Controller;
use stdClass;

class HabilidadeController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function create()
    {
        $post= self::_POST();
        $obj= new stdClass();
            $obj->nome= $post['nome'];
        
        $dao= new Habilidade();
        $hab= $dao->create($obj);  

        self::response(201, [$hab]);
    }

    public function list() 
    {
        $dao= new Habilidade();
        $list= $dao->search();

        self::response(200, $list);
    }

    public function get(int $id) 
    {
        $dao= new Habilidade();
        $hab= $dao->get(['id'=>$id]);

        self::response(200, [$hab]);
    }

    public function set()
    {
        $post= self::_POST();

        $obj= new stdClass();
            $obj->id= $post['id'];
            $obj->nome= $post['nome'];

        $dao= new Habilidade();
        $hab= $dao->update($obj, ['id'=>$post['id']]);

        self::response(200, $hab);
    }

    public function del()
    {
        $post= self::_POST();

        $obj= new stdClass();
            $obj->id= $post['id'];

        $dao= new Habilidade();
        $hab= $dao->delete($obj);

        self::response(200, [$hab]);
    }
}