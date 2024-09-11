<?php

namespace App\Model;

use App\Model\ClassConexao;

class ClassCadastro extends ClassConexao {

    private $db;

    #Realizar cadastro de clientes no sistema
    protected function cadastroClientes($nome, $sexo, $cidade){
        $id=0;
        $this->db = $this->conexaoDB() -> prepare("INSERT INTO teste VALUES (:id, :nome, :sexo, :cidade)");
        $this->db -> bindValue(":id", $id, \PDO::PARAM_INT);
        $this->db -> bindValue(":nome", $nome, \PDO::PARAM_STR);
        $this->db -> bindValue(":sexo", $sexo, \PDO::PARAM_STR);
        $this->db -> bindValue(":cidade", $cidade, \PDO::PARAM_STR);
        $this->db -> execute();
    }
}