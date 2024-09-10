<?php

namespace Src\Class;

class ClassBreadcrumb {

    use \Src\Traits\TraitUrlParser;

    #Cria os breadcrumbs do site(Trilha de Navegação)
    public function addBreadcrumb(){
        $contador = count($this->parserUrl());
        // echo $contador;
        $ArrayLink[0] = '';

        echo "<a href=".DIRPAGE.">home</a> > ";
        for($i = 0; $i < $contador; $i++){
            $ArrayLink[0] .= $this->parserUrl()[$i].'/';
            echo "<a href=".DIRPAGE.$ArrayLink[0].">".$this->parserUrl()[$i]."</a>";
            if($i < $contador - 1){
                echo " > ";
            }
        }

    }
}