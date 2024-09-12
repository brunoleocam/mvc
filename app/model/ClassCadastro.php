<?php

namespace App\Model;

use App\Model\ClassConexao;

class ClassCadastro extends ClassConexao {

    private $db;

    #Realizar cadastro de clientes no sistema
    protected function cadastroClientes($nome, $sexo, $cidade){
        $id=0;
        $this->db = $this->conexaoDB() -> prepare("INSERT INTO teste VALUES (:id, :nome, :sexo, :cidade)");
        $this->db -> bindParam(":id", $id, \PDO::PARAM_INT);
        $this->db -> bindParam(":nome", $nome, \PDO::PARAM_STR);
        $this->db -> bindParam(":sexo", $sexo, \PDO::PARAM_STR);
        $this->db -> bindParam(":cidade", $cidade, \PDO::PARAM_STR);
        $this->db -> execute();
    }

    #Acesso ao banco de dados com seleção
    protected function selecionaClientes($nome, $sexo, $cidade){
        $nome = '%'.$nome.'%';
        $sexo = '%'.$sexo.'%';
        $cidade = '%'.$cidade.'%';
        

        $BFetch = $this->db = $this->conexaoDB() -> prepare("SELECT * FROM teste WHERE Nome like :nome AND Sexo like :sexo AND Cidade like :cidade");
        $BFetch -> bindParam(":nome", $nome, \PDO::PARAM_STR);
        $BFetch -> bindParam(":sexo", $sexo, \PDO::PARAM_STR);
        $BFetch -> bindParam(":cidade", $cidade, \PDO::PARAM_STR);
        $BFetch -> execute();

        $I = 0;
        while($Fetch=$BFetch->fetch(\PDO::FETCH_ASSOC)){
            $Array[$I] = [
                'Id'=>$Fetch['Id'],
                'Nome'=>$Fetch['Nome'],
                'Sexo'=>$Fetch['Sexo'],
                'Cidade'=>$Fetch['Cidade']
            ];
            $I++;
        }
        return $Array;
    }

    #Deletar direto no banco
    protected function deletarClientes($Id){
        $BFetch = $this->db = $this->conexaoDB() -> prepare("DELETE FROM teste WHERE Id = :Id");
        $BFetch -> bindParam(":Id", $Id, \PDO::PARAM_INT);
        $BFetch -> execute();
    }

    #Atualização direto no DB
    protected function atualizarClientes($Id, $Nome, $Sexo, $Cidade){
        $BFetch = $this->db = $this->conexaoDB() -> prepare("UPDATE teste SET Nome=:nome, Sexo=:sexo, Cidade=:cidade WHERE Id=:id");
        $BFetch -> bindParam(":id", $Id, \PDO::PARAM_INT);
        $BFetch -> bindParam(":nome", $Nome, \PDO::PARAM_STR);
        $BFetch -> bindParam(":sexo", $Sexo, \PDO::PARAM_STR);
        $BFetch -> bindParam(":cidade", $Cidade, \PDO::PARAM_STR);
        $BFetch -> execute();
    }
}