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
        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">E-mail</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div><br>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="password">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Confirm Password</label>
            <input type="password" class="form-control" id="confirm_password">
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
<script type="text/javascript">
  // conferir se as senhas são iguais
    var password = document.getElementById("password")
    var confirm_password = document.getElementById("confirm_password")

    function validatePassword(){
      if(password.value != confirm_password.value){
        confirm_passowrd.setCustomValidity("Senhas diferentes!")
      }else{
        confirm_password.setCustomValidity('')
      }
    }

    password.onchange = validatePassword
    confirm_password.onkeyup = validatePassword
  </script>