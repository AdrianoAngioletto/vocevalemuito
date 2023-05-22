<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="https://images.vexels.com/media/users/3/144097/isolated/lists/3dedcd235214cdde6b4e171fdbf66c9d-icone-de-coracao.png">
    <style>
  .principal {
    background-color: #ffffff;
    padding: 100px; 
    text-align: center; 
    font-family: Verdana, Geneva, Tahoma, sans-serif;
  }
  
  @media (max-width: 768px) {
    .principal {
      padding: 20px; 
    }
  }

.formulario label{

display: block;

}

</style>
</head>
<body>

<head>


    <div class="menu">

        <ul>
        
        <li><a href="index.php">INICIO</a></li>
        <li><a href="sobre.php">SOBRE</a></li>
        <li><a href="doacao.php">DOAÇÃO</a></li>
        
        
        </ul>
        
        
        </div>


        <figcaption class="img">

            <img style="margin-left: 25px;" src="https://i.postimg.cc/C1TB3MSL/png-clipart-graphics-text-graph-businessman-cartoon-web-design-text-removebg-preview.png">
            
            
            </figcaption>



</head>




<main>

<div class="principal">


<p> Entre em contato conosco se você acha que pode ajudar no desenvolvimento ou ser voluntário no chat. Seria um prazer tê-lo conosco! Saiba que você está ajudando a mudar vidas! Acreditamos que plantamos e colhemos, e você está seguindo o caminho da luz! Se desejar conversar sobre outro assunto, por favor, preencha o formulário com sua dúvida ou questão</p>

<div class="formulario">
<form action="envia.php" method="post">


    <label for="nome">Nome:</label>
    <input style="border-radius: 8px;" type="text" id="nome" name="nome">

    <label for="sobrenome">Sobrenome:</label>
    <input style="border-radius: 8px;" type="text" id="sobrenome" name="sobrenome">

    <label for="email">Email:</label>
    <input type="email" id="email" name="email">

     <label for="assunto">Assunto:</label>
    <input style="border-radius: 8px;" type="text" id="assunto" name="assunto">

    <label for="mensagem">Mensagem:</label>
    <textarea id="mensagem" name="mensagem" placeholder="Digite sua mensagem"></textarea>

    <br>
    <br>
   <input type="submit" name="submit" value="Enviar" style="background: linear-gradient(to bottom, #FF5F6D, #FF3131); color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">
  </form>
</div>
</form>

</div>




</main>
    
</body>
</html>