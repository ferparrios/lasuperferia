<?php
$name = $_POST['name'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$marca = $_POST['marca'];
$rubro = $_POST['rubro'];
$producto = $_POST['producto'];
$razonsoc = $_POST['razonsoc'];
$ruc = $_POST['ruc'];
$redes = $_POST['redes'];
$select = $_POST['select'];

$header = 'From: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por " . $name . ".\r\n";
$message .= "Su e-mail es: " . $email . " \r\n";
$message .= "Su teléfono es: " . $telephone . " \r\n";
$message .= "Su marca es: " . $marca . " \r\n";
$message .= "Su rubro es: " . $rubro . " \r\n";
$message .= "Su producto es: " . $producto . " \r\n";
$message .= "Su razón social es: " . $razonsoc . " \r\n";
$message .= "Su ruc es: " . $ruc . " \r\n";
$message .= "Su fanpage es: " . $redes . " \r\n";
$message .= "Se enteró de la Super Feria en: " . $select . " \r\n";
/*$message .= "Mensaje: " . $_POST['message'] . " \r\n";*/
$message .= "Enviado el " .date('d/m/Y', time());

$para = 'chumbi@sonr.digital, info@lasuperferia.com, carla.palomares@sonr.digital';
$asunto = 'Mensaje de la Super Feria';

mail($para, $asunto, utf8_decode($message), $header);

header("Location: thankyou.html");
?>