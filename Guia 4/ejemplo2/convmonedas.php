<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/monedas.css">
</head>

<body>
    <header>
        <h1>Tabla de conversion de colones a dolares</h1>
        <hr />
    </header>
    <section>
        <article>
            <?php
            define("EQUIV", "8.75");
            $colones = 1.00;
            $tabla = "<table>\n<thead>\n";
            $tabla .= "<th>Colones</th>";
            $tabla .= "<th>Dolares</th>";
            $tabla .= "</thead>\n<tbody>\n";
            while ($colones <= 10) {
                $tabla .= "<tr>\n<td>&cent; ";
                $tabla .= number_format($colones, 2, '.', '.') . "</td><td>\$ ";
                $tabla .= number_format($colones / EQUIV, 2, '.', '.');
                $colones += 0.25;
                $tabla .= "</td>\n</tr>\n";
            } //fin del while
            $tabla .= "</tbody>\n</table>\n";
            echo $tabla;
            ?>

        </article>
    </section>
</body>

</html>