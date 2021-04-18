<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial de un numero</title>
    <link rel="stylesheet" href="css/factorial.css">
    <link rel="stylesheet" href="css/fonts.css">
    <script src="js/modernizr.custom.lis.js"></script>
    <script src="js/filterTextField.js"></script>
</head>

<body>
    <header>
        <h1>Obtener el factorial de un numero</h1>
    </header>
    <section>
        <article>
            <div class="contenedor">
                <?php
                if(isset($_POST['enviar']));
                $cont = is_numeric($_POST['factorial']) ? $_POST['factorial'] : null;
                $msg = isset($cont) || $cont==null ? "<p>No ha ingresado ningun numero</p>" : "";
                echo "<div class=\"encabezado\">";
                

            </div>
        </article>
    </section>
</body>

</html>