<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scripts con (x) HTML y PHP</title>
    <link rel="stylesheet" media="screen" href="css/htmlphp.css">
    <script src="js/modernizr.custom.lis.js"></script>
    <script src="js/prefixfree.min.js"></script>
</head>
<body>
<div class="wrap">
    <header>
    <h1>Demostracion de HTML Y PHP</h1>
    </header>
    <!-- Parte de la pagina web generada con html-->
     <section class="main">
             <article id="html">
                <div class="text">
                <p>
                    &lt;!DOCTYPE html&gt;<br />
                    &lt;html&gt;<br/>
                    ...
                </p>
                <p>Parte de HTML normal.</p>
                <p>
                    &lt;/html&gt;
                </p>
                </div>
                <div class="img">
                <img src="img/html5.png" alt="Logo de HTML5">
                </div>
             </article>
<?php
    //parte de la pagina generada con lenguaje php
    echo "<article id=\"php\">\n";
    echo "<div class=\"text\">";
    echo "<p>&lt;?php<br />";
    echo "...<br />";
    echo "Parte con PHP .</p>";
    echo "<p>?&gt;</p>";
    echo "</div>";
    echo "<div class=\"img\">";
    echo "<img src=\"img/php.png\" alt=\"Logo de HTML5\" />";
    echo "</div>";
    echo "\n</article>\n";
?>
    </section>


</div>
    
</body>
</html>