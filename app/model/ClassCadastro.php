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

    #Acesso ao banco de dados com seleção
    protected function selecionaClientes($nome, $sexo, $cidade){
        $nome = '%'.$nome.'%';
        $sexo = '%'.$sexo.'%';
        $cidade = '%'.$cidade.'%';
        

        $BFetch = $this->db = $this->conexaoDB() -> prepare("SELECT * FROM teste WHERE Nome like :nome AND Sexo like :sexo AND Cidade like :cidade");
        $BFetch -> bindValue(":nome", $nome, \PDO::PARAM_STR);
        $BFetch -> bindValue(":sexo", $sexo, \PDO::PARAM_STR);
        $BFetch -> bindValue(":cidade", $cidade, \PDO::PARAM_STR);
        $BFetch -> execute();

        $I = 0;
        while($Fetch=$BFetch->fetch(\PDO::FETCH_ASSOC)){
            $Array[$I] = [
                "Nome"=>$Fetch['Nome'],
                "Sexo"=>$Fetch['Sexo'],
                "Cidade"=>$Fetch['Cidade']
            ];
            $I++;
        }
        return $Array;
    }
}