<?php
include_once "../servico/Autenticacao.php";
include_once "../servico/Bd.php";

$nome=$_GET["nome"];
$senha=$_GET["senha"];
$email=$_GET["email"];

if (isset($_GET["id_usuario"])) { //atualiza
    $id = $_GET["id_usuario"];
    $sql = "update `usuario` set nome='$nome', senha='$senha', email='$email' where id_usuario='$id_usuario' ";
}else { //grava um novo
    $sql = "INSERT INTO `usuario` (`id_usuario`, `nome`, `senha`, `email`) VALUES (NULL, '$nome', '$senha', '$email')";    
}

$bd = new Bd();
$contador = $bd->exec($sql);

header("Location:../menu.php");
?>


