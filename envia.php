<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mail = new PHPMailer(true);

    try {
        // Configurações do servidor SMTP
        $mail->isSMTP();                                            // Envia usando SMTP
        $mail->Host       = 'smtp.gmail.com';                       // Servidor SMTP
        $mail->SMTPAuth   = true;                                   // Habilita a autenticação SMTP
        $mail->Username   = 'vocevalemuitobr@gmail.com';             // Usuário SMTP (seu email)
        $mail->Password   = 'jggskltqsswxevpm';                      // Senha SMTP (sua senha)
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            // Habilita a criptografia TLS/SSL
        $mail->Port       = 465;                                    // Porta TCP para conexão

        // Remetente e destinatário
        $name = $_POST['nome'];
        $email = $_POST['email'];
        $mail->setFrom($email, $name);
        $mail->addAddress('vocevalemuitobr@gmail.com', $name); // Usar o nome do remetente no campo "Para"
        $mail->addReplyTo($email, $name);

        // Conteúdo do email
        $mail->isHTML(true);

        $assunto = $_POST['assunto']; // Obtém o valor do campo "Assunto"
        $mensagem = $_POST['mensagem']; // Obtém o conteúdo da mensagem do campo <textarea>

        $mail->Subject = $assunto; // Define o valor do campo "Assunto" como o assunto do email
        $mail->Body    = $mensagem; // Define o conteúdo da mensagem como o corpo do email
        $mail->AltBody = $mensagem; // Define o mesmo conteúdo da mensagem como o corpo em texto simples

        $mail->send();
        echo ("<SCRIPT LANGUAGE='JavaScript'>
         window.alert('email enviado com sucesso')
         window.location.href='contato.php';
         </SCRIPT>");
    } catch (Exception $e) {
        echo "A mensagem não pôde ser enviada. Erro do Mailer: {$mail->ErrorInfo}";
    }
}
?>
