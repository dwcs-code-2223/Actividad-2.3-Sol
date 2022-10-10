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
        $numeros = [];
        for ($i = 0; $i <= abs($num); $i++) {
            //$numeros[$i] = $i;
            array_push($numeros, $i);
        }
        if ($num < 0) {
            $numeros = array_reverse($numeros);

            for ($i = 0; $i <= abs($num); $i++) {
                $numeros[$i] *= (-1);
            }
        }

        print_r($numeros);
        ?>



    </body>
</html>

