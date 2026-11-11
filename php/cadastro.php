<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário - Biblioteca</title>
</head>

<body>

</body>

<div class="container">
    <h1>Cadastro de Usuário - Triflora</h1>
    <p class="subtitulo">Criar conta </p>

    <?php
    if (isset($_GET['erro']) && $_GET['erro'] === 'email') {
        echo '<div class="mensagem-erro">Este email já está cadastrado. Por favor, tente novamente.</div>';
    }
    ?>

    <form action="salvar_usuario.php" method="POST">
        <div class="form-group">
            <label for="nome">NOME</label>
            <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required>
        </div>


        <div class="form-group">
            <label for="email">EMAIL</label>
            <input type="email" id="email" name="email" placeholder="Digite seu email" required>
        </div>


        <div class="form-group">
            <label for="senha">SENHA</label>
            <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>
        </div>

         <div class="form-group">
            <label for="telefone">TELEFONE</label>
            <input type="text" id="telefone" name="telefone" placeholder="Digite seu telefone" required>
        </div>

         <div class="form-group">
            <label for="cpf">CPF</label>
            <input type="text" id="cpf" name="cpf" placeholder="Digite seu CPF" required>
        </div>

        <div class="form-group">
            <label for="endereco">ENDEREÇO</label>
            <input type="text" id="endereco" name="endereco" placeholder="Digite seu endereço" required>
        </div>


        <button type="submit" class="btn btn-block">Cadastrar</button>
    </form>


    <div class="nav-links">
        <p>Já tem conta?<a href="login.php">Fazer login</a></p>
    </div>
    <a href="login.php" class="btn btn-block"> Voltar para login</a>

</div>

</html>