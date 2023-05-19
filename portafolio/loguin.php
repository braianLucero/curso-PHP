
<?php
    session_start();
    if($_POST) {
        if(($_POST['email']=='brasanluc123@gmail.com') && ($_POST['password']== '12345')){
            $_SESSION['email']='brasanluc123@gmail.com';
            header('location:index.php'); 

        }else{
            echo '<script>alert("Usuario o contrasenia no valida");</script>';
        }
    }

?>


<!doctype html>
<html lang="en">
<head>

  <title>Title</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="loguin.css">
</head>
<style>
        body {
            background-image: url('fondo.avif');
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
<body>

            <form action="loguin.php "method="POST" >
                <div class="parent-wrapper">          
                <span class="close-btn glyphicon glyphicon-remove"></span>
                    <div class="subscribe-wrapper">   
                        <h3>Enter your portfolio </h3>
                        <input type="email" class="subscribe-input" placeholder="Your e-mail" id="email" name="email" required>
                        <input type="password" class="subscribe-input" placeholder="Your password" id="password" name="password" required> 
                        <button type="submit" class="submit-btn">Enviar</button>
                        
                    </div>    
                </div>
            </form>

</body>

</html>


