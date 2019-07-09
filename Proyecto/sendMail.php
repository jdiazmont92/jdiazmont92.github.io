<?php
    if(isset($_POST['name']) && isset($_POST['email'])){
        $emailto = "juanjo92.jd@gmail.com";
        $name = $_POST['name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
        $mailHeader = "Contacto desde WebSite por : $name \r\n";
        $emailMessage = " Contact from website \n 
            Nombre:  $name  \n
            Apellido: $last_name \n 
            Email: $email \n 
            Telefono: $phone \n
            Mensaje: $message ";
        mail($emailto, $mailHeader, $emailMessage, $mailHeader) or die("Error!");
        header('Location: /');
    }else{
        echo('No se ha enviado');
    }
    
?>