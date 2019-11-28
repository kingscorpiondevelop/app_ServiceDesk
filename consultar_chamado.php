<?php require_once "validador_acesso.php" ?>

<?php

  $servidor = "localhost";
  $usuario = "root";
  $senha = "";
  $db = "kingscorpion";
  $conn = mysqli_connect($servidor, $usuario, $senha, $db);

  $query = "SELECT max(protocolo) FROM chamados";
  $selectchama = mysqli_query($conn ,$query);
  $nummax = mysqli_fetch_array($selectchama, MYSQLI_NUM);
//  var_dump($nummax);
//  echo "<br>";

  $query2 = "SELECT min(protocolo) FROM chamados";
  $selectchama2 = mysqli_query($conn ,$query2);
  $numinicio = mysqli_fetch_array($selectchama2, MYSQLI_NUM);
//  var_dump($numinicio);
//  echo "<br>";

?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>King Scorpion</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="home.php">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        King Scorpion
      </a>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="logoff.php">SAIR</a>
        </li>
      </ul>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>
            
            <div class="card-body">

                <?php

                  $protocolo = (int)$numinicio[0];
                  $fim = (int)$nummax[0];
              
                  do{ 

                    $query = "SELECT id,titulo,categoria,descricao FROM chamados where protocolo = '$protocolo'";
                    $selectchama = mysqli_query($conn ,$query);
                    $chamados = mysqli_fetch_array($selectchama, MYSQLI_NUM);
                    $protocolo++;

                    if ($chamados[0] == "") {
                        
                    }
                    else{ 
                      ?>
                      <div class="card mb-3 bg-light">
                        <div class="card-body">
                          <h5 class="card-title"><?= $chamados[1]?></h5>
                          <h6 class="card-subtitle mb-2 text-muted"><?= $chamados[2]?></h6>
                          <p class="card-text"><?= $chamados[3]?></p>
                        </div>
                      </div>
                      <?php
                    }
                  }while($protocolo <= $fim); 
                  ?>

              <div class="row mt-5">
                <div class="col-6">
                  <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>