<?php

namespace App\Controller;

// session_start();

use Src\Class\ClassRender;
use Src\Interfaces\InterfaceView;
use App\Model\ClassCadastro;
class ControllerCadastro extends ClassCadastro {

    protected $Nome;
    protected $Sexo;
    protected $Cidade;


    public function __construct() {

        $Render = new ClassRender();
        $Render->setTitle("Cadastro");
        $Render->setDescription("Faço seu cadastro.");
        $Render->setKeywords("cadastro de clientes, cadastro");
        $Render->setDir("cadastro");
        $Render->renderLayout();
    }

    public function recVariaveis() {
        
        if(isset($_POST['Nome'])){
            $this -> Nome = filter_input(INPUT_POST, 'Nome', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if(isset($_POST['Sexo'])){
            $this -> Sexo = filter_input(INPUT_POST, 'Sexo', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if(isset($_POST['Cidade'])){
            $this -> Cidade = filter_input(INPUT_POST, 'Cidade', FILTER_SANITIZE_SPECIAL_CHARS);
        }
    }

    #Chamar o método de cadastro da ClassCadastro
    public function cadastrar (){
        $this -> recVariaveis();
        parent::cadastroClientes($this -> Nome, $this -> Sexo, $this -> Cidade);
        echo "Cadastrado com sucesso!";
    }

}