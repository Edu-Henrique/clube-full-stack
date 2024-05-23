<?php

function send(array $data)
{
    $email = new PHPMailer\PHPMailer\PHPMailer(true);

    // Configurações do servidor
    //$email->SMTPDebug = 2; // 0 = off (para produção), 1 = mensagens do cliente, 2 = mensagens do cliente e servidor
    $email->isSMTP();
    $email->CharSet = 'UTF-8';
    $email->Host = 'smtp.mail.com';
    $email->Port = 587;
    $email->SMTPSecure = \PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS; // Usar STARTTLS com a porta 587
    $email->SMTPAuth = true;
    $email->Username = 'user';
    $email->Password = 'pass';

    // Configurações do e-mail
    $email->isHTML(true);
    $email->setFrom('user', "Mailer");
    $email->addAddress($data['quem']);
    $email->Subject = $data['assunto'];
    $email->Body = $data['mensagem'];
    $email->AltBody = 'Para ver esse email tenha certeza de estar vendo um programa que aceita ver HTML';

    return $email->send();
}