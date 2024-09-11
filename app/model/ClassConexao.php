<?php

namespace App\Model;

 class ClassConexao {
    
    #Realiza a conexão com o banco de dados
    public function conexaoDB(){
        try {
            $Con=new \PDO("mysql:host=".HOST.";dbname=".DB."","".USER."","".PASS."");
            return $Con;
        } catch (\PDOException $erro) {
            return $erro->getMessage();
        }
    }
}