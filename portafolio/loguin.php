<!doctype html>
<html lang="en">
<head>
  <title>Title</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<!-- <style>
        body {
            background-image: url('fondoBorroso.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style> -->
<body>
<div class="container">
    <div class="row my-5">
        <div class="col-md-4 mx-auto">
            <form action="submit.php" method="POST" class="p-4 border rounded shadow-lg" style="background-color: rgba(255, 255, 255, 0.7);">
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Mensaje</label>
                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary border-dark btn-lg" style="background-color: rgba(128, 128, 128, 0.9); opacity: 0.9;">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</div>


</body>

</html>


