<?php

namespace App\Controller;

use App\Model\ClassLogin;
use \Src\Class\ClassRender;

Class ControllerLogin extends ClassLogin {

    use \Src\Traits\TraitUrlParser;

    public function __construct() {
        if(count($this->parserUrl()) == 1){
            $Render = new ClassRender();
            $Render->setTitle("Login");
            $Render->setDescription("Faça seu login");
            $Render->setKeywords("login, login website, area restrita");
            $Render->setDir("login");
            $Render->renderLayout();
        }
    }

    #Validar o login do usuário
    public function validarLogin(){
        
        $Validacao = $this -> validarUsuario($_POST['Usuario'], $_POST['Senha']);
        if($Validacao == true){
            echo "Logado com sucesso";
        } else {
            echo "Erro ao logar";
        }
    }
}