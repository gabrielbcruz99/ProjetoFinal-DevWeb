<?php
//include_once "../servico/Autenticacao.php";

session_start();
include_once "../servico/Bd.php";
 
$id=$_GET['id_usuario'];
 
$sql = "delete from usuario where id_usuario='$id' ";
$bd = new Bd();
$contador = $bd->exec($sql);

echo "<h1>foi excluído $contador registro</h1>";
 
?>

<a href="ConsultaUsuario.php">Voltar</a>
