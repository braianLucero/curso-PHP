
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
</head>
<style>
        body {
            background-image: url('fondo.avif');
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
<body>
<div class="container">
    <div class="row my-5">
        <div class="col-md-4 mx-auto">
            <form action="loguin.php "method="POST" class="p-4 border rounded shadow-lg" style="background-color: rgba(255, 255, 255, 0.0,5);">
                <div class="mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                    </svg>
                    <label for="email" class="form-label">Usuario</label>
                    <input type="text" class="form-control border" style ="background-color:rgb(255,255,255,0.1);" id="email" name="email" required>
                </div>

                <div class="mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                        <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
                    </svg>
                    <label for="name" class="form-label">Password</label>
                    <input type="password" class="form-control" style ="background-color:rgb(255,255,255,0.1);" id="password" name="password" required>
                </div>

                <div class="d-grid">
                     <button type="submit" class="btn btn-success" > Iniciar sesión</button>
                </div>

            </form>
        </div>
    </div>
</div>


</body>

</html>


