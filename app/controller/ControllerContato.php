<?php

namespace App\Controller;

// session_start();

use Src\Class\ClassRender;
use Src\Interfaces\InterfaceView;
class ControllerContato extends ClassRender implements InterfaceView {
    // public function __construct() {
    //     echo "Controller Home";
    // }

    public function __construct() {

        // if(isset($_SESSION['login'])){
        // } else {
        //     echo "Você não tem permissão para acessar essa página";
        // }
        $this->setTitle("Contato");
        $this->setDescription("Faço contato conosco");
        $this->setKeywords("contato, telefone, email");
        $this->setDir("contato");
        $this->renderLayout();
    }

}