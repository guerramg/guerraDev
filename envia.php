<?php
//Variáveis

$nome = $_POST['name'];
$whatsapp = $_POST['email'];
$mensagem = $_POST['message'];
// Corpo E-mail
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
      <table width='510' border='1' cellpadding='1' cellspacing='1' bgcolor='#CCCCCC'>
          <tr>
            <td>
<tr>
               <td width='500'>Nome:$nome</td>
              </tr>
              <tr>
                <td width='320'>Whatsapp:<b>$email</b></td>
   </tr>
                <td width='320'>Mensagem:$mensagem</td>
              </tr>
      </table>
  </html>
";
//enviar

  // emails para quem será enviado o formulário
  $emailenviar = "agenciaintuito@gmail.com";
  $destino = $emailenviar;
  $assunto = "Contato do Site Guerra DEV";

  // É necessário indicar que o formato do e-mail é html
  $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
      $headers .= 'From: '.$nome.' <'.$email.'>';
  //$headers .= "Bcc: $EmailPadrao\r\n";

  $enviaremail = mail($destino, $assunto, $arquivo, $headers);
  if($enviaremail){
    print "<script>alert('Email enviado com sucesso!')</script>";
    print "<script>location=('https://dev.guerra.app.br')</script>";
  } else {
    print "<script>alert('ERRO! Email não enviado!')</script>";
    print "<script>location=('https://dev.guerra.app.br')</script>";
  }
?>