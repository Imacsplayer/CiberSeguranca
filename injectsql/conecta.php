<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "pentestWeb";
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);
if (!$conexao) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "conectado";
}
