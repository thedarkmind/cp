<?php
//1 a donde va el email. se pueden poner varios separados por comas
$para = 'thedarkmind@hotmail.com, jehurtado2008@hotmail.com';
//2 acepta comillas sencillas o dobles
$asunto = "Mensaje desde la pagina web";
//5 vamos a hacer la cabecera $mailheader 
//OJO las cadenas se concatenan con un punto. LE ponemos el metodo POST del html 9a1
// y le damos los parametros de acuerdo al valor que le dimos a cada cosita en el name= NAME en el html
// \r \n son saltos de pagina
$mailheader = "From: ".$_POST["email"]."\r\n";
$mailheader .= "Reply-to: ".$_POST["email"]."\r\n";
$mailheader .= "Content-type: text/html; charset=utf-8\r\n";
//6 ahora sigue el mMESSAGE_BODY que es el contenido del email
$MESSAGE_BODY = "Nombre: ".$_POST["name"]."\n";
$MESSAGE_BODY .= "\n<br>Email: ".$_POST["email"]."\r\n";
$MESSAGE_BODY .= "\n<br>Mensaje: ".nl2br($_POST["message"])."\r\n";




//3 despues de poner las variables hay que ejecutar el comando MAIL
//con sus variables y parametros
//si no se ejecuta vien el envio se le pone el OR DIE con el mensaje que le debe salir al usuario
mail($para, $asunto, $MESSAGE_BODY, $mailheader) or die("Error al Enviar Email");

//4 una vez ejecutado el comando mail, hay que decirle a donde tiene que irse el navegador
// location es la misma direccion desde donde se esta ejecutando DEBE SER EL DOMINIO DEL CLIENTE
header('location: index.html')



?>