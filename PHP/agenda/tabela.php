<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <link rel="stylesheet" href="style.css">
   <style>
    body{
        background-color: #93BFA3;
    }
    table{
        box-shadow: 1px 5px 10px black;
    }
    footer{
        background-color: #01261C;
        color: white;
        height: 100px;
    }
    footer p{
        color:whitesmoke;
        padding: 45px;
        text-align: center;
    }
    footer  a {
        text-decoration: none;
    }
   </style>
</head>

<body>
    <h1>AGENDA</h1>
    
    <?php
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];

    $fp = fopen("agenda.txt","a+");
    fwrite($fp, $nome . "&");
    fwrite($fp, $email . "&");
    fwrite($fp, $telefone . "&");
    fwrite($fp, "\n");
    fclose($fp);

    $linhas = array(); // Array para armazenar as linhas do arquivo

    $fp = fopen("agenda.txt","r");
    while (!feof($fp)) {
        $linha = fgets($fp);
        if ($linha !== false) {
            $linhas[] = explode("&", trim($linha)); // Adiciona a linha como um array ao array $linhas
        }
    }
    fclose($fp);
    ?>

    <table class="table table-striped table-bordered table-hover">
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
        </tr>
        <?php foreach ($linhas as $linha): ?>
            <tr>
                <td><?= $linha[0] ?></td>
                <td><?= $linha[1] ?></td>
                <td><?= $linha[2] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <footer>
        <p>Developed by <a href="https://github.com/augustovv" target="_blank">augustovv</a></p>
    </footer>


    


               








</body>

</html>