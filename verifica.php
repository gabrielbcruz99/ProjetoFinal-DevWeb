<?php
session_start();
 
$nome=$_POST["nome"];
$senha=$_POST["senha"];

include_once "servico/Bd.php";

$bd = new Bd();
$sql = "select * from usuario where nome='$nome' and senha='$senha'";

var_dump($nome);
//var_dump($senha);
 
//$sql = "SELECT * FROM usuario WHERE login = :login AND senha = :senha";

//
//NAO protege contra SQL Injection

foreach ($bd->query($sql) as $row) {
   // $_SESSION["autenticado"]=true;
    //$_SESSION["id_usuario"]=$row['id'];
    $_SESSION["nome"]=$row['nome'];
    $_SESSION["senha"]=$row['senha'];
    //$_SESSION["loginusuario"]=$row['login'];

    header("Location: menu.php");
    
/*    $html ="
    <html>
        <head><title>Tela de verificação </title></head>
        <body>
         <script>
         window.location.replace('https://aula-php-andre-eppinghaus.000webhostapp.com/20202/3006/menu.php');
         </script>
        </boyd>
    </html>
"; 
    echo $html;
    return;*/
}
//se a consulta retornar vazia, nem entra no foreach
//e o usuário digitou os dados incorretos.
session_destroy ( ) ;
    $html ="
<html>
    <head><title>Tela de verificação </title></head>
    <body>
        <h1>O login é $login e sua senha é $senha e são inválidos</h1>
    </boyd>
</html>

";
    
echo $html;
?>