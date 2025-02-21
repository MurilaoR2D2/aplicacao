<?php

include('./src/model/login.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <title>Document</title>
</head>

<body>

  <div class="d-flex justify-content-center">
    <div class="card mt-3 text-dark text-center" style="width: 500px;">
      <div class="card-header">
        <h1>Login</h1>
      </div>

      <div class="card-body">
        <form method="post">
          <div class="form-group">
            <label>E-mail</label>
            <input type="email" class="form-control" name="email" placeholder="email@teste.com" required autofocus>
          </div>

          <div class="form-group my-3">
            <label>Senha</label>
            <input type="password" class="form-control" name="senha" placeholder="********" required>
          </div>

          <button type="submit" class="btn btn-lg btn-primary">Entrar</button>

        </form>
      </div>

    </div>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>