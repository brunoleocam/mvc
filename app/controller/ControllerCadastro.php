<?php

namespace App\Controller;

// session_start();

use Src\Class\ClassRender;
use Src\Interfaces\InterfaceView;
use App\Model\ClassCadastro;
class ControllerCadastro extends ClassCadastro {

    protected $Id;
    protected $Nome;
    protected $Sexo;
    protected $Cidade;

    use \Src\Traits\TraitUrlParser;

    public function __construct() {

        if(count($this->parserUrl()) == 1){
            $Render = new ClassRender();
            $Render->setTitle("Cadastro");
            $Render->setDescription("Faço seu cadastro.");
            $Render->setKeywords("cadastro de clientes, cadastro");
            $Render->setDir("cadastro");
            $Render->renderLayout();
        }

    }

    public function recVariaveis() {
        
        if(isset($_POST['Id'])){
            $this->Id=$_POST['Id'];
        }
        if(isset($_POST['Nome'])){
            $this -> Nome = filter_input(INPUT_POST, 'Nome', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if(isset($_POST['Sexo'])){
            $this -> Sexo = filter_input(INPUT_POST, 'Sexo', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if(isset($_POST['Cidade'])){
            $this -> Cidade = filter_input(INPUT_POST, 'Cidade', FILTER_SANITIZE_SPECIAL_CHARS);
        }
    }

    #Chamar o método de cadastro da ClassCadastro
    public function cadastrar (){
        $this -> recVariaveis();
        parent::cadastroClientes($this -> Nome, $this -> Sexo, $this -> Cidade);
        echo "Cadastrado com sucesso!";
    }

    public function seleciona(){
        $this -> recVariaveis();
        $B = $this -> selecionaClientes($this -> Nome, $this -> Sexo, $this -> Cidade);

        echo "
            <form name='FormDeletar' id='FormDeletar' action='".DIRPAGE."cadastro/deletar' method='post'>
                <table border='1'>
                    <tr>
                        <td>Ação</td>
                        <td>Nome</td>
                        <td>Sexo</td>
                        <td>Cidade</td>
                    </tr>
            ";

        foreach($B as $V){
            echo "<tr>
                    <td><input type='checkbox' id='Id' name='Id[]' value='$V[Id]'><img class='ImageEdit' rel='$V[Id]' src='".DIRIMG."edit.png' alt='Editar'></td>
                    <td>".$V['Nome']."</td>
                    <td>".$V['Sexo']."</td>
                    <td>".$V['Cidade']."</td>
                </tr>";
        }

        echo "  </table>
                <input type='submit' value='Deletar'>
            </form>
            ";
    }

    #Deletar dados do DB
    public function deletar(){
        $this -> recVariaveis();
        // var_dump($this -> Id);
        foreach($this -> Id as $IdDeletar){
            $this -> deletarClientes($IdDeletar);
        }
    }

    #Puxar dados do DB
    public function puxarDB($Id){
        $this -> recVariaveis();
        $B = $this -> selecionaClientes($this -> Nome, $this -> Sexo, $this -> Cidade);

        foreach($B as $C){
            // var_dump($C);
            if($C['Id'] == $Id){
                $Nome = $C['Nome'];
                $Sexo = $C['Sexo'];
                $Cidade = $C['Cidade'];
            }
        }

        echo "
            <form name='FormAtualizar' id='FormAtualizar' action='".DIRPAGE."cadastro/atualizar' method='post'>
                <input type='hidden' name='Id' id='Id' value='$Id'><br>
                <label>Nome:</label>
                <input type='text' name='Nome' id='Nome' value='{$Nome}'><br>
                <label>Sexo:</label>
                <select name='Sexo' id='Sexo'>
                    <option value='$Sexo'>$Sexo</option>
                    <option value='Masculino'>Masculino</option>
                    <option value='Feminino'>Feminino</option>
                </select><br>
                <label>Cidade:</label>
                <input type='text' name='Cidade' id='Cidade' value='$Cidade'><br>
                <input type='submit' value='Atualizar'><br>
            </form>
        ";
    }

    #Atualizar dados dos clientes
    public function atualizar(){

        $this -> recVariaveis();
        $this -> atualizarClientes($this->Id, $this->Nome, $this->Sexo, $this->Cidade);
        echo "Atualizado com sucesso!";
    }

}