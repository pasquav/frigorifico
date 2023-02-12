<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="refresh" content="10">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link href="css/index.css" rel="stylesheet">
        <link href="https://fonts.cdnfonts.com/css/gagalin" rel="stylesheet">
    </head>
    <body>
    <main class="d-flex justify-content-center align-items-center">
  <form onsubmit="validateUser(this.username.value, this.password.value); return false;">
    <div class="form-group">
      <label for="username">Login</label>
      <input id="username" name="username" type="text" placeholder="Informe seu login" class="form-control">
    </div>
    <div class="form-group">
      <label for="password">Senha</label>
      <input name="password" id="password" type="password" placeholder="Informe sua senha" class="form-control">
    </div>
    <input type="submit" value="Login" class="btn btn-primary">
  </form>   
</main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script src="scripts/validaLogin.js" ></script>
    </body>

</html>