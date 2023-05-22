<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Você Vale-Muito™</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="https://images.vexels.com/media/users/3/144097/isolated/lists/3dedcd235214cdde6b4e171fdbf66c9d-icone-de-coracao.png">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
<style>
  @media (max-width: 600px) {
    .menu li:last-child {
      margin-top: 35px;
    }
  }

.img img {
  max-width: 100%;
  height: auto;
  margin-left: 75px;
}



@media (max-width: 767px) {
  .img img {
    max-width: 300px;
  }
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

<li> <a href="contato.php">CONTATO</a></li>


</ul>


</div>


<figcaption class="img">

<img src="./img/coracao_2.png">


</figcaption>


</head>


<main>



<div class="menu-login">

    <span id="digite-bb"> </span>  
    <br>
    <br>

    <script>
    var typed = new Typed('#digite-bb', {
      strings: ['SUA VIDA IMPORTA', 'Aqui você vale muito!'],
      typeSpeed: 100,
      backSpeed: 70,
      loop: true
    });
    </script>  
    
    



    <form action="./php/configregistro.php" method="post">

    <label> seu nome</label>
    <input type="text" placeholder="primeiro nome"  required name="u"  />

    <label> seu  sobrenome</label>
    <input type="text" placeholder="somente seu sobrenome"  required name="sobre"  />

    <label> seu email</label>
    <input type="email" placeholder="digite seu email" required name="e" />

    <label> digite sua senha </label>
    <input type="password" placeholder="digite uma senha" required name="s" />
    <br>
    <br>

    <hr>
   <div class="g-recaptcha" data-sitekey="6LfrKiImAAAAAA-eg5Cx8iYlEdAURg_DxnpNwccP"></div>

    <input type="submit"  name="submit" value="ok" />

    <hr>

    <p style="color: rgb(255, 255, 255);"> Ja tem conta? Faça o <a href="../php/login.php"> Login </a> </p>   

    <br>
    <br>
    </form>


    </div>

 <footer class="animacao">
    
        <p> Desenvolvido por <a style="color: rgb(255, 255, 255)" href="https://www.linkedin.com/in/adrianoangioletto/"> Adriano Angioletto  </a> ™ </p>
            
 </footer>
    
    </main>




</body>
</html>