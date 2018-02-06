<?php
// require ReCaptcha class
require('recaptcha-master/src/autoload.php');

$name = $_POST['name'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$comments = $_POST['comments'];
$para = 'uno@conexion6.co';
$titulo = 'Conexion 6';
$header = 'From: ' . $email;
$msjCorreo = "name: $name\n celular: $celular\n E-Mail: $email\n comments: $comments";
  
if ($_POST['submit']) {
if (mail($para, $titulo, $msjCorreo, $header)) {
echo "<script language='javascript'>
alert('Mensaje enviado, muchas gracias.');
window.location.href = 'http://conexion6.com';
</script>";
} else {
echo 'Falló el envio';
}
}
?>