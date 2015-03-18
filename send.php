<?php

/********************************************************************************************
**************************** Validacion de declaracion de variables *************************
********************************************************************************************/

if ((isset($_POST["Name"])) || (isset($_POST["Email"])) || (isset($_POST["Phone"]))||(isset($_POST["Subject"]))||(isset($_POST["Message"]))){

  /********************************************************************************************
  ***************************** Validacion de variables vacias ********************************
  ********************************************************************************************/

  if ((!empty($_POST["Name"])) || (!empty($_POST["Email"])) || (!empty($_POST["Phone"]))||(!empty($_POST["Subject"]))||(!empty($_POST["Message"]))){

    //$to = 'info@visualizolaweb.com';
    $to = 'claudiamile@gmail.com';

    $subject = 'SOLICITUD DE CONTACTO';

    $headers = "From: " . $_POST["Email"] . "\r\n"; 
    $headers .= "CCO: visualizolaweb@gmail.com\r\n" ;
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";  

    $message = '<html><body>';
    $message .= '<h1>SE HA ENVIADO UNA SOLICITUD DE CONTACTO DESDE VISUALIZOLAWEB.COM.</h1>';
    $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
    $message .= "<tr style='background: #eee;'><td><strong>Razon Social o Nombre:</strong> </td><td>" . $_POST["Name"]. "</td></tr>";
    $message .= "<tr><td><strong>Email:</strong> </td><td>" . $_POST["Email"] . "</td></tr>";
    $message .= "<tr><td><strong>Telefono:</strong> </td><td>" . $_POST["Phone"] . "</td></tr>";
    $message .= "<tr><td><strong>Asunto:</strong> </td><td>" . $_POST["Subject"] . "</td></tr>";
    $message .= "<tr><td><strong>Mensae:</strong> </td><td>" . $_POST["Message"] . "</td></tr>";
   
    /*$curText = htmlentities($_POST['requerimientos']);           
    if (($curText) != '') {
        $message .= "<tr><td><strong>Requerimientos:</strong> </td><td>" . $curText . "</td></tr>";
    } */

    $message .= "</table>";
    $message .= "</body></html>";

    mail($to, $subject, $message, $headers);
   }
 }
?>

<script type="text/javascript">
  window.location.href = 'index.php';
</script>