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

        <h2>Cadastro</h2>

    </div>

 

<form class="w3-container" id="form" name="form" method="post" action="AtividadeOnlineAction.php">

        <label class="w3-text-teal"><b>Nome</b></label>

        <input class="w3-input w3-border w3-light-grey" name="nome" type="text" id="nome" placeholder = "Digite o seu nome">
        

 

        <label class="w3-text-teal"><b>Sobrenome</b></label>

        <input class="w3-input w3-border w3-light-grey" name="sobrenome" type="text" id="sobrenome" placeholder = "Digite seu sobrenome">
        
 

        <label class="w3-text-teal"><b>Email</b></label>

        <input class="w3-input w3-border w3-light-grey" name="email" type="text" id="email" placeholder = " Digite seu e-mail">
        

 

        <label class="w3-text-teal"><b>Formação</b></label>

        <input class="w3-input w3-border w3-light-grey" name="formacao" type="text" id="formacao" placeholder = " Descreva sua formação">
        

 

        <label class="w3-text-teal"><b>Descrição Último Emprego</b></label>

        <input class="w3-input w3-border w3-light-grey" name="emprego" type="text" id="emprego" placeholder = "Descreva sua última função">
        

        <br>

 

        <button class="w3-btn w3-blue-grey" name="enviar" type="submit" id= "enviar">Enviar</button>
      

    </form>

</body>

</html>