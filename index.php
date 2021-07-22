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
      font-size: 45pt;
      font-family: Arial, Geneva, Tahoma, sans-serif;
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

    }
  </style>
</head>
<body class="bg-dark" style="color:#63B8FF; font-family: roboto, sans-serif;">
  <!-- <div class="container text-center p-3">
    <div class="row">
      <div class="col">
  
<hr style="color:#63B8FF">
   <div class="container" id="corpo">
   <div class="row">
      <div class="col">
      </div>
   </div>
   
      </div>
  </div><br><br>
  </div> -->

  <div class="container p-3" id="geral">
    <div class="row">
      <div class="col p-4" id="p1">
      <h2 class="text-center" id= "niverDay">Noemy Medeiros <br>      <small>- 19 anos -</small></h2>

        <!-- <img src="src/2.jpg" width="300" height="300" class="rounded-circle border border-primary border-4 dashed"> -->
      <h5>Venha celebrar comigo o meu aniversário! <br> <br>
       CONTO COM SUA PRESENÇA!<br><br>
        <h5>Data: <br>
          <br>
          <?php
              $d=strtotime("next Saturday");
              echo date("Y-m-d h:i:sa", $d) . "<br>";
          ?>
        </h5><br>
        <p>Local: Kilamba - Prédio U47 - Apt.41</p>
          Confirma sua presença no formulário abaixo: </h5><br><br>
          <form action="" style="border-radius:10%; border:1px;" class="">
          <label for="nome">
            <input type="text" placeholder="Coloque aqui seu nome feio" class="form-control">
          </label><br>
          <label for="button">
            <input type="button" class="btn form-control"  id="bt" value="Confirmar minha Presença">
          </label>
        </form>
      </div>
      <div class="col text-center">
        <img src="src/2.jpg" id="ft1" alt="" width="600" heigth="700"><br>
      </div>
    </div>
  </div>
</body>
</html>