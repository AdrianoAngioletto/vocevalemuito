<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../style.css">
       <link rel="shortcut icon" href="https://images.vexels.com/media/users/3/144097/isolated/lists/3dedcd235214cdde6b4e171fdbf66c9d-icone-de-coracao.png">
</head>



<body>
    
<header>

<div class="menu">

    <ul>
    
    <li><a href="../index.php">INICIO</a></li>
    <li><a href="../sobre.php">SOBRE</a></li>
    <li><a href="../doacao.php">DOAÇÃO</a></li>
    
    
    </ul>
   <figcaption class="img-login">

        <img  src="../img/coracao_4.png"  width="300px" />

        
    </figcaption>

    </div>

</header>


<main>

<div class="menu-login">

 

    <form action="configlogin.php" method="post">

        <label style="margin-top: 15px;"> seu email</label>
        <input  type="email" placeholder="digite seu email" required name="e" />
        <br> 
        <label style="margin-top: 15px;"> digite sua senha </label>
      
        <input style="margin-bottom: 15px;" type="password" placeholder="digite uma senha" required name="s" />

        <br>
        <input type="submit"  name="submit" value="ok" />

        <p style="color: rgb(255, 255, 255);"> esqueceu a senha ? <a href="#"> Clique aqui </a> </p>   
        
</form>

</div>



</main>




</body>
</html>