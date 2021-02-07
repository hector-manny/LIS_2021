<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=b , initial-scale=1.0">
    <title>calcular Salario</title>
    <link rel="stylesheet" href="css/salario.css">
    <link rel="stylesheet" href="css/links.css">
    <link rel="stylesheet" href="css/formoid-solid-purple.css">
    <script src="js/modernizr.custom.lis.js"></script>
</head>
<body>
    <header id="inset">
        <h1>Detalle del salario</h1>
    </header>
    <section>
        <article>
            <?php
                if(isset($_POST['enviar'])){
                    $empleado = isset($_POST['empleado']) ? $_POST['empleado'] : "";
                    $sueldobase = isset($_POST['sueldobase']) ? $_POST['sueldobase'] : "";
                   
                    if(isset($_POST['hextra'])){
                    $horasextras = isset($_POST['numhorasex']) ? $_POST['numhorasex'] : "0";
                    $pagohextra = isset($_POST['numhorasex']) ? $_POST['numhorasex'] : "0";
                    $sueldohextras = $horasextras * $pagohextra;
                }else{
                    $horasextras = 0;
                    $sueldohextras = 0;
                }
                }
                $sueldoneto = $sueldobase + $sueldohextras;
                echo "<div>\n<h3>Boleta de pago</h3>\n";
                echo "<table>\n";
                echo "\t<tr>\n\t\t<th colspan=\"2\">\n\t\t\tDetalle del pago\n\t\t</th>\n\t</tr>\n";
                echo "\t<tr>\n\t\t<td>\n\t\t\t\El empleado es: \n\t\t</td>\n\t\t</td>\n\t\t<td class=\"detail\">\n\t\t\t", $empleado,"\n\t\t</td>\n\t\t\t</tr>\n";
                echo "\t<tr>\n\t\t<td>\n\t\t\t\El sueldo base es: \n\t\t</td>\n\t\t</td>\n\t\t<td class=\"detail\">\n\t\t\t", $sueldobase,"\n\t\t</td>\n\t\t\t</tr>\n";
                echo "\t<tr>\n\t\t<td>\n\t\t\t\Las horas extras son: \n\t\t</td>\n\t\t</td>\n\t\t<td class=\"detail\">\n\t\t\t", $horasextras,"\n\t\t</td>\n\t\t\t</tr>\n";
                echo "\t<tr>\n\t\t<td>\n\t\t\t\El pago por hora extra es: \n\t\t</td>\n\t\t</td>\n\t\t<td class=\"detail\">\n\t\t\t", $sueldohextras,"\n\t\t</td>\n\t\t\t</tr>\n";
                echo "\t<tr>\n\t\t<td>\n\t\t\t\El sueldo neto devengado es: \n\t\t</td>\n\t\t</td>\n\t\t<td class=\"detail\">\n\t\t\t", $sueldoneto,"\n\t\t</td>\n\t\t\t</tr>\n";
            ?>
            <a href="salario.html" class="a-btn">
            <span class="a-btn-symbol">i</span>
            <span class="a-btn-text">Ingresar</span>
            <span class="a-btn-slide-text">otro empleado</span>
            <span class="a-btn-slide icon"></span>
            </a>
        </article>
    </section>
</body>
</html>