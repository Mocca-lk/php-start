<!DOCTYPE html>

<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <title>GET e POST</title>

</head>

<body>
    <div class="w3-container w3-teal">
        <?php
            echo "<h2>Cadastro Confirmado com Sucesso!!</h2>";

    $nome = $_POST['nome'];
    echo "Nome: ".$nome."<br>";

    $sobrenome = $_POST['sobrenome'];
    echo "Sobrenome: ".$sobrenome. "<br>";
   
    $email = $_POST['email'];
    echo "Email: " .$email. "<br>";
   
    $formacao = $_POST['formacao'];
    echo "Formação: ".$formacao. "<br>";

    $emprego = $_POST['emprego'];
    echo "Descrição Último Emprego: ".$emprego;
    ?>
    </div>

</body>
</html>