<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detector de lenguaje del navegador</title>
    <meta http-equiv="Content-Script-Type" content="text/javascript" />
    <link rel="stylesheet" href="css/idioma.css">
</head>
<body>
    <div id="wrapper">
    <header>
        <h1 class="emboss">Idioma del navegador</h1>
    </header>
    <section>
    <?php
     // Antes de nada inttroduccimos mensajes en forma de variables 
     $español = "Hola";
     $ingles = "Hello";
     $aleman = "Hallo";
     $frances = "Bonjour";
     $italiano = "Ciao";
     $portugues = "Olá";

     //Ahora leemos del navegador cual es su lengua oficial 
     $completo = $_SERVER["HTTP_ACCEPT_LANGUAJE"];
     $idioma = substr($_SERVER["HTTP_ACCEPT_LENGUAJE"],0,2);
        //formulamos las posibilidades que se puedan dar 
        echo "<p>"
    
    ?>
    </section>
    </div>
    
</body>
</html>