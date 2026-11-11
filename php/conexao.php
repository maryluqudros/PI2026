<?php

$conexao = mysqli_connect(
    "localhost",
    "root",
    "root",
    "funcionarios"
);

if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}