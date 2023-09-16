<?php
// Sanitize user input
$name = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$subject = filter_var($_POST['subject'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$message = filter_var($_POST['message'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

// Generate email message body as HTML
$arquivo = "
  <style type='text/css'>
  body {
      margin:0px;
      font-family:Verdane;
      font-size:12px;
      color: #666666;
  }
  a{
      color: #666666;
      text-decoration: none;
  }
  a:hover {
      color: #FF0000;
      text-decoration: none;
  }
  </style>
<html>
<body>
    <table width='510' border='1' cellpadding='1' cellspacing='1' bgcolor='#CCCCCC'>
        <tbody>
            <tr>
                <td width='500'><strong>Nome:</strong></td><td width='500'>$name</td>
            </tr>
            <tr>
                <td width='320'><strong>E-mail:</strong></td><td width='320'>$email</td>
            </tr>
            <tr>
                <td width='320'><strong>Assunto:</strong></td><td width='320'>$subject</td>
            </tr>
            <tr>
                <td width='320'><strong>Mensagem:</strong></td><td width='320'>$message</td>
            </tr>
        </tbody>
    </table>
</body>
</html>

  ";

$to = 'contato@allysonbelo.com';
$replyTo = "$name <$email>";
$subject = 'Novo contato do site';

// Set email headers
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= "From: Site <contato@allysonbelo.com>\r\n";
$headers .= "Reply-To: $replyTo\r\n";

// Send the email
if (mail($to, $subject, $arquivo, $headers)) {
    $mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
    // Define the base URL
    header('Location: http://' . $_SERVER['HTTP_HOST'] . '/obrigado');
    exit;
} else {
    $mgm = "ERRO AO ENVIAR E-MAIL!";
    echo $mgm;
}
