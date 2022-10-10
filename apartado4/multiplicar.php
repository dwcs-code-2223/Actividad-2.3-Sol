<html>
    <head>
        <title>Resultado</title>
        <link href="../css/estilos.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <?php
        $num = 0;
        foreach ($_REQUEST as $clave => $valor) {
            echo "<strong>$clave</strong>: $valor <br/>";

            if ($clave === "num") {
                $num = $valor;
            }
        }
        $tabla = [];

        for ($i = 0; $i <= 10; $i++) {
            $clave = $num . "x" . $i;
            $tabla[$clave] = $num * $i;
        }
        
        print_r($tabla);
        
        ?>



    </body>
</html>

