<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php
    //operadores condicionais
    //== ->
    //=== 
    //!= ou <> 
    //!== 
    // <
    // >
    // <=
    // =>

    //opera lógiocos
    //E: && ou AND -> Retorna verdadeiro se todos os resultados for verdadeiro
    //OU: || ou OR -> Retorna verdadeiro se pelo menos um resultado for verdadeiro
    //XOR: XOR -> Retorna verdadeiro se uma das expressoes for verdadeira e a outra falsa
    //! -> Inverte o resultado retornado pela expressão

    //() estabelecer precedência 

    //(v e v) = v ou f = v
    if((22 == 22 && 3 == 3) || 5 != 5) {
        echo 'Verdadeiro';
    }else {
        echo 'Falso';
    }

    ?>


</body>

</html>