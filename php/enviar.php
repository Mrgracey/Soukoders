
<?php 
$myemail = 'elterrens800@gmail.com';
$name = $_POST['fname'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = $myemail;
$email_subject = "Nuevo mensaje: $subject";
$email_body = "Haz recibido un nuevo mensaje. \n Nombre: $name \n Correo: $email \n Mensaje: \n $message";
$headers = "From: $email";

mail($to, $email_subject, $email_body, $headers);

//echo "El mensaje se ha enviado correctamente";
header('Location: contacto.html');
?>
