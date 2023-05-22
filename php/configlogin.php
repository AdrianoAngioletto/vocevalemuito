<?php
session_start();

if (isset($_POST['submit']) && !empty($_POST['e']) && !empty($_POST['s'])) {

    include_once('db.php');

    $email = $_POST['e'];
    $senha = $_POST['s'];

    $email = mysqli_real_escape_string($conexao, $email);
    $senha = mysqli_real_escape_string($conexao, $senha);


    $stmt = $conexao->prepare("SELECT * FROM registros WHERE email = ? AND senha = ?");
    $stmt->bind_param("ss", $email, $senha);

    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows < 1) {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        echo ("<script>
                alert('Email ou senha incorretos!');
                window.location.href = 'login.php';
              </script>");
    } else {
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        $stmt->close();
        $conexao->close();
        header('Location: sistema.php');
        exit();
    }
} else {
    header('Location: login.php');
    exit();
}
?>
