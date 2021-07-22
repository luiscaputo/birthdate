<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="src/bootstrap.css">
  <title>Login</title>
  <style>
    .frm{
      margin-top: 20%;
      text-align: center;
    }
  </style>
</head>
<body style="background-color: black; color:azure;">
    <div class="container p-3 t-3">
      <div class="row">
        <div class="col frm">
          <h4>Todos os Confirmados</h4>
          <?php
            require_once 'core/connection.php';
            $todos = $pdo->prepare("SELECT * FROM invictes");
            $todos->execute();
            echo '
                <table  class="table table-dark" style="border:2px; border-color: white;">
                <tr>
                  <th>Ordem</th>
                  <th>Nome Completo</th>
                  <th>Data de Confirmação</th>
                </tr>
            ';
            while($dados = $todos->fetch(PDO::FETCH_ASSOC)){
                echo '
                <tr>
                  <td>'.$dados['id'].'º</td>
                  <td>'.$dados['name'].'</td>
                  <td>'.$dados['created_at'].'</td>
                ';
            }
            echo'  
            </tr>
            </table>';
          ?>
        <a href="logout.php">Sair</a>
        </div>
      </div>
    </div>
</body>
</html>