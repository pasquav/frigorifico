<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="css/index.css" rel="stylesheet">
</head>

<body>
    <?php  
    require_once '../frigorifico/include/nav.php';
    require_once '../frigorifico/include/aside.php';
    require_once '../frigorifico/include/estilos.php';

?>
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

</body>

</html>