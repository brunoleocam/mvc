<?php
namespace App;

use Src\Class\ClassRoutes;

class Dispatch extends ClassRoutes {

    #Atributos
    private $Method;
    private $Param = [];
    private $Obj;

    protected function getMethod() {
        return $this->Method;
    }

    public function setMethod($Method) {
        $this->Method = $Method;
    }

    protected function getParam() {
        return $this->Param;
    }

    public function setParam($Param) {
        $this->Param = $Param;
    }

    #Método Construtor
    public function __construct() {
        self::addController();
    }

    #Método de adição de controller	
    private function addController() {
        $RotaController = $this->getRota();
        $NameS = "App\\Controller\\{$RotaController}";
        $this->Obj = new $NameS;

        if(isset($this->parserUrl()[1])) {
            self::addMethod();
        }
    }

    #Método de adição de método do controller
    private function addMethod() {
        if(method_exists($this->Obj, $this->parserUrl()[1])) {
            $this -> setMethod("{$this->parserUrl()[1]}");
            self::addParam();
            call_user_func_array([$this->Obj, $this->getMethod()], $this->getParam());
        } 
    }

    #Método de adição de parâmetros do controller
    private function addParam() {
        $ContArray = count($this->parserUrl());

        if($ContArray > 2) {
            foreach($this->parserUrl() as $Key => $Value) {
                // echo "<br>". $Key . " - " . $Value . "<br>";
                if($Key > 1) {
                    $this->setParam($this->Param += [$Key => $Value]);
                }
            }
            // var_dump($this->getParam());
        }
    }
}