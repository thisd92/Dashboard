<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

  <title>Login - Dashboard</title>
  <style type="text/css">
    #cor {
      color: #000;
    }
    #logo {
      max-width: 40%;
    }
  </style>
</head>

<body style="background-color:#fdf4c4" id="cor">
  <div class="container">
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4" style="margin-top: 150px">
        <center>
          <img src="https://static.goomer.app/stores/102134/products/mobile_menu/templates/153659/logo_v1616627026.png" id="logo">
        </center><br><br>
        <form action="index1.php" method="POST">
          <?php
          if(isset($_GET['msg'])) {
            $msg = $_GET['msg'];
            if($msg == 1){?>
              <div class="alert alert-info" role="alert">
                Cadastrado com sucesso!
              </div>
            
            <?php }else{ ?>
              <div class="alert alert-danger" role="alert">
                E-mail/Senha inválido.
              </div>
            
            <?php } } ?>
          
          <div class="form-group">
            <label for="exampleInputEmail1">E-mail</label>
            <input type="email" name="mail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
          </div><br>
          <button type="submit" class="btn btn-block btn-primary">Submit</button>
        </form><br>

        <center>
          <a href="signup.php">Sign Up?</a>
        </center>
      </div>
      <div class="col-md-4"></div>

    </div>

  </div>


</body>
</html>

