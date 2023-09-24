
<?php

    require_once 'index.php';

    $nombre=$_POST['nombre'];
    $curso=$_POST['curso'];
    $mensaje=$_POST['mensaje'];
    
    $to="listanumero10chacabuco@gmail.com";
    $subject="Nuevo mensaje recibido";
    

    $texto="
    
    <h1>Nuevo mensaje recibido</h1>
    
    <h3>Nombre: </h3><b style='color: pink;'>$nombre</b>
    <h3>Curso: </h3><b style='color: red;'>$curso</b>
    <br>
    <h3>Mensaje: </h3><h4 style='color: white;'>$mensaje</h4>

    ";
    
    $headers = "From: noreply@listanumero10chacabuco.com" . "\r\n" . "MIME-Version: 1.0" . "\r\n" . "Content-type:text/html;charset=UTF-8" . "\r\n";



    mail($to, $subject, $texto, $headers);
    
    


?>