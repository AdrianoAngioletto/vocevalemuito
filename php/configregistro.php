<?php

$captcha = isset($_POST['g-recaptcha-response']) ? $_POST['g-recaptcha-response'] : null;

if (isset($_POST['submit']) && isset($captcha)) {

    include_once('db.php');

    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }

    if (!is_null($captcha)) {
        $res = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LfrKiImAAAAAF2ZD6a0bhp8fWRGSN_ZmIcvTc3t&response=" . $captcha . "&remoteip=" . $_SERVER['REMOTE_ADDR']));
        if ($res->success === true) {
            $usuario = @$_POST['u'];
            $sobrenome = @$_POST['sobre'];
            $email = @$_POST['e'];
            $senha = @$_POST['s'];

            
            $usuario = mysqli_real_escape_string($conexao, $usuario);
            $sobrenome = mysqli_real_escape_string($conexao, $sobrenome);
            $email = mysqli_real_escape_string($conexao, $email);
            $senha = mysqli_real_escape_string($conexao, $senha);


            $stmt = $conexao->prepare("INSERT INTO registros (usuario, sobrenome, email, senha, ip) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("sssss", $usuario, $sobrenome, $email, $senha, $ip);

            $stmt->execute();

            if ($stmt->affected_rows > 0) {
                echo ("<script>
                        alert('Conta cadastrada com sucesso!');
                        window.location.href = 'login.php';
                      </script>");
            } else {
                echo ("<script>
                        alert('Conta já cadastrada');
                        window.location.href = 'login.php';
                      </script>");
            }

            $stmt->close();
        } else {
            echo ("<script>
                    alert('Você precisa validar o CAPTCHA!');
                    window.location.href = '../index.php';
                  </script>");
        }
    } else {
        echo ("<script>
                alert('Captcha não preenchido');
              </script>");
    }
}
?>
