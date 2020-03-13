<?php
namespace app\controller;

use app\model\Disponibilidade;
use core\system\Controller;
use stdClass;

class DisponibilidadeController extends Controller
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
        
        $dao= new Disponibilidade();
        $disp= $dao->create($obj);  

        self::response(201, [$disp]);
    }    

    public function list() 
    {
        $dao= new Disponibilidade();
        $list= $dao->search();

        self::response(200, $list);
    }

    public function get(int $id) 
    {
        $dao= new Disponibilidade();
        $disp= $dao->get(['id'=>$id]);

        self::response(200, [$disp]);
    }

    public function set()
    {
        $post= self::_POST();

        $obj= new stdClass();
            $obj->id= $post['id'];
            $obj->nome= $post['nome'];

        $dao= new Disponibilidade();
        $disp= $dao->update($obj, ['id'=>$post['id']]);

        self::response(200, $disp);
    }

    public function del()
    {
        $post= self::_POST();

        $obj= new stdClass();
            $obj->id= $post['id'];

        $dao= new Disponibilidade();
        $disp= $dao->delete($obj);

        self::response(200, [$disp]);
    }

}