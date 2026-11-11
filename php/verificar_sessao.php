<?php

//verificar_sessao.php
// arquivo incluído nas páginas restritas do sistema.
// garante que apenas usuarios logados possam acessar o conteudo.

// inicia a sessão do usuário (ou retoma uma sessão já existente)
session_start();

//cabeçalho HTTP impedem o navegador de guardar a página em cache
// isso evita que o usuario volte a painel após fazer o logout.

header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header ("Expires: 0 ");


//verifica se a variavel de sessao 'nome' existe.
//se não existir, o usuario não está logado.

if (!isset($_SESSION['nome'])) {
//header() redireciona o navegador para outra página
header("Location: login.php");
//exit () encerra o script para garantir que nada mais seja executado
exit();
}