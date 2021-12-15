<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>

    <?php
        $numero = Array();

        while(count($numero) <= 5) {

        num = rand(1, 60);
            if(!in_array($num, $numero)) {
                $numero[] = $num;
            }

        }

        print_r($numero)
    ?>

</body>

</html>