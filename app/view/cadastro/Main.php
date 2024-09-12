<form name="FormCadastro" id="FormCadastro" action="<?php echo DIRPAGE . 'cadastro/cadastrar'; ?>" method="post">
    <label>Nome:</label>
    <input type="text" name="Nome" id="Nome"><br>
    <label>Sexo:</label>
    <select name="Sexo" id="Sexo">
        <option value="Masculino">Masculino</option>
        <option value="Masculino">Feminino</option>
    </select><br>
    <label>Cidade:</label>
    <input type="text" name="Cidade" id="Cidade"><br>
    <input type="submit" value="Cadastrar"><br>
</form>
<br><br>
<hr>
<br><br>
<h1>Lista de Clientes</h1>
<form name="FormSelect" id="FormSelect" action="<?php echo DIRPAGE.'cadastro/seleciona'; ?>" method="post">
    <label>Nome:</label>
    <input type="text" name="Nome" id="Nome"><br>
    <label>Sexo:</label>
    <select name="Sexo" id="Sexo">
        <option value="Masculino">Masculino</option>
        <option value="Feminino">Feminino</option>
    </select><br>
    <label>Cidade:</label>
    <input type="text" name="Cidade" id="Cidade"><br>
    <input type="submit" value="Pesquisar"><br>
</form>

<!-- Será responsável por receber a tabela de pesquisa-->
<div class="Resultado" style="width: 100%; height: 300px; background: pink;"></div>

<br><br>
<hr>
<br><br>
<h1>Formulário de Atualizações</h1>
<div class="ResultadoFormulario" style="width: 100%; height: 300px; background: green;"></div>