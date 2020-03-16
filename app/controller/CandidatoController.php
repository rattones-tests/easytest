<?php 
namespace app\controller;

use core\system\Controller;
use app\model\Candidato;
use stdClass;

class CandidatoController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function create()
    {
        $post= self::_POST();
        $obj= new stdClass();
            $obj->uid= '';
            $obj->nome= $post['nome'];
            $obj->email= $post['email'];
            $obj->skype= $post['skype'];
            $obj->celular= $post['celular'];
            $obj->linkedin= $post['linkedin'];
            $obj->cidade= $post['cidade'];
            $obj->estado= $post['estado'];
            $obj->portifolio= $post['portifolio'];
            $obj->pretensao= $post['pretensao'];
            $obj->bancoBeneficiario= $post['bancoBeneficiario'];
            $obj->bancoCPF= $post['bancoCPF'];
            $obj->bancoNome= $post['bancoNome'];
            $obj->bancoAgencia= $post['bancoAgencia'];
            $obj->bancoContaCorrente= $post['bancoContaCorrente'];
            $obj->bancoContaPoupanca= $post['bancoContaPoupanca'];
            $obj->bancoConta= $post['bancoConta'];
            $obj->linkCRUD= $post['linkCRUD'];
        
        $dao= new Candidato();
        $cand= $dao->create($obj);  

        self::response(201, [$cand]);
    }

    public function list() 
    {
        $dao= new Candidato();
        $list= $dao->search();

        self::response(200, $list);
    }

    public function get(string $uid) 
    {
        $dao= new Candidato();
        $cand= $dao->get(['uid'=>$uid]);

        self::response(200, [$cand]);
    }

    public function set()
    {
        $post= self::_POST();

        $obj= new stdClass();
            $obj->uid= $post['uid'];
            $obj->nome= $post['nome'];

        $dao= new Candidato();
        $cand= $dao->update($obj, ['uid'=>$post['uid']]);

        self::response(200, [$cand]);
    }

    public function del()
    {
        $post= self::_POST();

        $obj= new stdClass();
            $obj->uid= $post['uid'];

        $dao= new Candidato();
        $cand= $dao->delete($obj);

        self::response(200, [$cand]);
    }
}