<?php

namespace App\Model;

class ClassLogin  extends ClassConexao {


    #Validar o Usuário no Banco
    protected function validarUsuario($Usuario, $Senha){
        $BFetch = $this->conexaoDB()->prepare("SELECT * FROM login WHERE USUARIO=:usuario AND SENHA=:senha");
        $BFetch -> bindParam(":usuario",$Usuario, \PDO::PARAM_STR);
        $BFetch -> bindParam(":senha",$Senha, \PDO::PARAM_STR);
        $BFetch -> execute();

        if($Row = $BFetch -> rowCount() > 0){
            return true;
        } else {
            return false;
        }
    }
}