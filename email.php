<?php
$to = 'jotasaezpro@gmail.com';
$remite = $_POST['jcremite'];
$subject = 'Jotasaez Producciones : Solicitud de pedido';
$jcitems = $_POST['jcitems'];
$headers = 'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $jcitems, $headers);
mail($remite, $subject, $jcitems, $headers);
echo 'Su pedido ha sido solicitado con éxito.<br/> Nos pondremos en contacto con usted mediante el correo facilitado: ';
echo $remite;
echo '<br/><br/><a href="javascript:history.go(-1)">Volver a Jotasaez Producciones</a>';
?>
