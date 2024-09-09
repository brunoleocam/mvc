<?php

namespace App\Controller;

use Src\Class\ClassRender;
use Src\Interfaces\InterfaceView;
class ControllerHome extends ClassRender implements InterfaceView {
    // public function __construct() {
    //     echo "Controller Home";
    // }

    public function __construct() {
        $this->setTitle("Página Inicial");
        $this->setDescription("Site de MVC");
        $this->setKeywords("MVC completo com PHP");
        $this->setDir("home/");
        $this->renderLayout();
    }

}