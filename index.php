<?php 
  require_once 'core/connection.php';
  if(isset($_POST['confirm'])){
    $name = filter_input(INPUT_POST, 'name');
    $see = $pdo->prepare("SELECT * FROM invictes where name = '$name'");
    $see->execute();
    if($see->rowCount() > 0){
      echo "<script>alert('Já vai alguém com teu nome! Liga no meu número.')</script>";
    }else{
      $save = $pdo->prepare("INSERT INTO invictes(name, statusInvicte) values ('$name', 'Confirmado')");
      $save->execute();
      if($save->rowCount() > 0){
        echo "<script>alert('Valeu por confirmar. Estarei aguardando por si no sábado!.')</script>";
      }
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="src/bootstrap.css">
  <title>Noemy Medeiros</title>
  <style>
    body{
      background-image: url(src/1.svg) no-repeat;
    }
    #niverDay{
      font-size: 30pt;
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif, Geneva, Tahoma, sans-serif;
      padding-top: 10px;
      padding-bottom: 10px;
    }
    .foto{
      background-color: white;
      border: #63B8FF solid 5px;
      border-radius: 100px;
    }
    #corpo{
      background-color: grey;
      color: black;
      border-radius: 15px;
      padding: 10px;
    }
    #bt{
      border-color: #63B8FF;
      border-radius: 10px;
      color: #63B8FF;
    }
    #bt:hover{
      background-color: #63B8FF;
      color: white;
      transition: 1s;
    }
    #geral{
      margin-top: 30px;
    }
    #p1{
      margin-top: 60px;
    }
    #ft1{
      border-radius: 10px;
    }
  </style>
</head>
<body class="" style="background-color:black; color:#63B8FF">

  <div class="container p-3" id="geral">
    <div class="row">
      <div class="col p-4" id="p1">
      <h3 class="text-center" id="niverDay">Noemy Medeiros <br>      <small>- 19 anos -</small></h3>
      <h3 class="text-center">Estás Convidado(a)</h3><br>
      <hr style="background-color: white;"><br>

        <!-- <img src="src/2.jpg" width="300" height="300" class="rounded-circle border border-primary border-4 dashed"> -->
      <h5>Venha celebrar comigo o meu aniversário! <br> <br>
       CONTO COM SUA PRESENÇA! Será no Kilamba prédio U47 apt. 47, Já neste sábado pelas 16h.<br><br>
        <!-- <p>Data:
          <?php
              // $d=strtotime("next Saturday");
              // echo date("Y-m-d h:i:sa", $d) . "<br>";
          ?>
        </p><br> -->
          <form action="" style="border-radius:10%; border:1px;" class="" method="post">
            <input type="text" placeholder="Coloque aqui seu nome feio" class="form-control" style="width:100%" name="name"><br>
            <input type="submit" class="btn form-control"  id="bt" value="Confirmar minha Presença" name="confirm">
        </form>
      </div>
      <div class="col text-center">
        <img src="src/2.jpg" id="ft1" alt="" width="600" heigth="700"><br>
      </div>
    </div>
  </div>
</body>
</html>