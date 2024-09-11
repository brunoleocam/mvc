<form name="FormCadastro" id="FormCadastro" action="<?php echo DIRPAGE.'cadastro/cadastrar'; ?>" method="post">
    <label>Nome:</label>
    <input type="text" name="Nome" id="Nome"><br>
    <label>Sexo:</label>
    <select name="Sexo" id="Sexo">
        <option value="M">Masculino</option>
        <option value="F">Feminino</option>
    </select><br>
    <label>Cidade:</label>
    <input type="text" name="Cidade" id="Cidade"><br>
    <input type="submit" value="Cadastrar"><br>
</form>