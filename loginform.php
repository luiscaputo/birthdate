<?php
  if(isset($_POST['entrar'])){
    $email = filter_input(INPUT_POST, 'email');
    $pass = filter_input(INPUT_POST, 'password');

    $email1 = "noemy@2021.com";
    $pass1 = "noemy202119";

    if($email != $email1){
      echo "<script>alert('Palavra Passe ou email errado! Tente Novamente')</script>";
    }else{
      if($email == $email1){
        if($pass == $pass1){
          session_abort();
          session_start();
          header('location: allCome.php');
        }else
        echo "<script>alert('Palavra Passe ou email errado! Tente Novamente')</script>";
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
  <title>Login</title>
  <style>
    #frm{
      margin-top: 50%;
    }
  </style>
</head>
<body style="background-color: black; color:azure;">
    <div class="container p-3 t-3">
      <div class="row">
        <div class="col"></div>
        <div class="col">
        <form method="post" id="frm">
        <h3 class="text-center mb-4">NOEMY MEDEIROS</h3>
              <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="email" name="email" id="form1Example1" class="form-control" placeholder="Email de acesso" required>
              </div>
              <!-- Password input -->
              <div class="form-outline mb-4">
                <input type="password" name="password" id="form1Example2" class="form-control" placeholder="Senha de acesso" required>
              </div>
              <!-- 2 column grid layout for inline styling -->
              <div class="row mb-1">
                <div class="col d-flex justify-content-center">
                  <!-- Checkbox -->
                </div>
              </div>
              <!-- Submit button -->
              <button type="submit" class="btn btn-primary btn-block" name="entrar">Ver meus convidados</button>
            </form>
        </div>
        <div class="col"></div>
      </div>
    </div>
</body>
</html>