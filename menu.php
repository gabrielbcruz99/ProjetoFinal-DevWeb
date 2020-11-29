<?php
//include_once "servico/Autenticacao.php";
 
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <title>Tela de sistema principal</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1>Bem-vindo Usuário</h1>
            </div>
            <div class="col-2">

            </div>
        </div>
        <div class="row">
            <ul class="nav">
                <li class="row pr-4"><a class="btn btn-primary ml-5" href="index.html">
                        Login </a></li>

                <li class="nav-item">
                    <a class="btn btn-primary" href="usuario/IncluirUsuario.php">Cadastro de Usuários</a>
                </li>
            </ul>
        </div>
        <br><br>


        <hr>
        <br>
        <div class="row">
            <?php
      include_once("servico/Bd.php");

      $bd = new Bd();
      $sql = "select * from usuario";

      foreach ($bd->query($sql) as $row) {

        echo '
                <div class="card mr-5" style="width: 18rem;">
                <div class="card-body pl-5">
                    <h5 class="card-title">' . $row['nome'] . '</h5>
                    <p class="card-text">' . $row['email'] . '</p>
                    <a href="usuario/ConsultaUsuario.php" class="card-link">Mais informações</a>
                </div>
                </div>

                ';
      }



      ?>




        </div>


        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
        </script>

        <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
        <footer class="mastfoot mt-auto">
            <p>©Sistema desenvolvido por Gabriel.</p>
        </footer>
</body>

</html>