<?php

session_start();


if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){

    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
}

 $logado = $_SESSION['email'];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BEM VINDO AO CHAT VOCÊ VALE MUITO!</title>
    <link rel="stylesheet" href="../style.css">
<link rel="shortcut icon" href="https://images.vexels.com/media/users/3/144097/isolated/lists/3dedcd235214cdde6b4e171fdbf66c9d-icone-de-coracao.png">
<style>
.painel {
  margin: auto;
  max-width: 500px;
  width: 100%;
  margin-top: 50px;
  text-align: center;
  font-family: brush;
  font-size: 25px;
}

a {
  color: white;
}

iframe {
  width: 100%; /* Tamanho inicial para dispositivos móveis */
  height: 300px; /* Altura inicial */
}

/* Estilos para a versão de computador */
@media screen and (min-width: 768px) {
  .painel {
    width: 540px; /* Tamanho da div para computador */
    margin: 0 auto; /* Centralizar a div */
  }

  iframe {
    width: 1200; /* Tamanho maior para computador */
    height: 405px; /* Altura maior */
  }
}

.button {
  display: block; /* Alterado para 'block' para ocupar a largura total */
  margin: 20px auto 0; /* Centralizado na horizontal e com espaço superior */
  padding: 10px 20px;
  background-color: #f44336;
  color: white;
  text-decoration: none;
  font-size: 16px;
  border-radius: 4px;
  transition: background-color 0.3s ease;
  max-width: 200px; /* Largura máxima do botão */
}

.button:hover {
  background-color: #df362c;
}

</style>
</head>

<body>

<header> 


<div class="menu">

<ul>

<li><a href="../doacao.php">DOAÇÃO</a></li>


</ul>


</div>

<div class="painel">

<img style="margin-top: 10px;" src="https://cdn-icons-png.flaticon.com/512/1373/1373255.png" width="300"/>
  <p style="color: white; font-size: 24px;"> bem vindo <?=$logado?> Seja educado! Conversas e palavras dirigidas à política, divulgações, ofensas preconceituosas e material adulto explícito são proibidas. Qualquer divergência será removida.  </p>
  <iframe src="https://xat.com/embed/chat.php#id=220521961&gn=vocevalemuito" frameborder="0" scrolling="no"></iframe>
  <br><small><a target="_BLANK" href="https://xat.com/web_gear/chat/embed.php?id=220521961&GroupName=vocevalemuito"></a></small>
</div>

<a style="margin-top: -35px; text-align: center; border-radius: 7px; font-family: brush; font-size: 18px;" href="sair.php" class="button">Sair</a>

</header>

</body>

</html>