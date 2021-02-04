<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/ejercicio6/css/conversion.css">
    <title>Conversión de cadenas</title>
</head>
<body>
    <?php
        define("SALTO", "\n");
        $cad = "10 metros";
        $str = "3D";
        $val = 20.5;
        $num = 7;

        //contruyendo el header 
        echo "<header>\n";
        echo "\t<h1>Trabajando con los tipos de datos en PHP</h1>\n";
        echo "\t<p id=\datos\">\n";
        echo "\t\tVariables:<br />\n";
        echo "\t\t\$cad = \"$cad\"<br />\n";
        echo "\t\t\$str = \"$str\"<br />\n";
        echo "\t\t\$val =  $val <br />\n";
        echo "\t\t\$num =  $num <br />\n";
        echo "\t</p>";
        echo "</header>\n";
        //Primera operacion 
        $concat = $cad + $val;
        echo '<section>';
        echo "\n";
        echo '<article>';
        echo '<p>El valor de $concat = $cad + $val es: <span> = "'. $cad . '"+' . $val . '</span> = <span>';
        echo $concat . '</span> y el tipo de dato es : <span>' . gettype($concat) . "</span></p>" . SALTO;
        echo '</article>';
        echo "\n";

        //segunda operacion 
        $concat = $str + $num;
        echo '<article>';
        echo '<p>El valor de $concat = $str + $num es: <span> = "'. $str . '"+' . $num . '</span> = <span>';
        echo $concat . '</span> y el tipo de dato es : <span>' . gettype($concat) . "</span></p>" . SALTO;
        echo '</article>';
        echo "\n";

        // tercera operacion 
        $concat = $cad + $num;
        echo '<article>';
        echo '<p>El valor de $concat = $cad + $num es: <span> = "'. $cad . '"+' . $num . '</span> = <span>';
        echo $concat . '</span> y el tipo de dato es : <span>' . gettype($concat) . "</span></p>" . SALTO;
        echo '</article>';
        echo "\n";

        // cuarta operacion 
        $concat = $str + $val;
        echo '<article>';
        echo '<p>El valor de $concat = $str + $val es: <span> = "'. $str . '"+' . $val . '</span> = <span>';
        echo $concat . '</span> y el tipo de dato es : <span>' . gettype($concat) . "</span></p>" . SALTO;
        echo '</article>';
        echo "\n";

        // quinta operacion
        $concat

    
    ?>
    
</body>
</html>