<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frigorifico</title>
    <link href="css/index.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body class="body">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="../frigorifico/images/boi.png"/></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php">Estoque</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Ações
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="insere.php">Insere dados</a></li>
                  <li><a class="dropdown-item" href="atualiza.php">Atualiza Dados</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="exclui.php">Exclui dados</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="sair"href="#">Sair</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
    </nav>
    <div class="tabela">

        <table class="table">
            <tr>
                <th>Codigo do Boi</th>
                <th>Valor pago por kg</th>
                <th>Peso do boi</th>
                <th>Valor pós triagem</th>
                <th>Lucro por animal</th>
            </tr>
            <tr>
                <td>001</td>
                <td>11,00</td>
                <td>1500</td>
                <td>33.000,00</td>
                <td>50%</td>
            </tr>
            </tr>
            <tr>
                <td>002</td>
                <td>12,00</td>
                <td>1400</td>
                <td>32.000,00</td>
                <td>40%</td>
            </tr>
            </tr>
            <tr>
                <td>003</td>
                <td>11,00</td>
                <td>1600</td>
                <td>35.000,00</td>
                <td>60%</td>
            </tr>
            </tr>
            <tr>
                <td>004</td>
                <td>10,00</td>
                <td>2000</td>
                <td>40.000,00</td>
                <td>20%</td>
            </tr>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="scripts/estoque.js"></script>
    <script src="scripts/modal.js"></script>
</body>
</html>