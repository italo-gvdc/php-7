<html>
	<head>
		<meta charset="utf-8" />
		<title>Curso PHP</title>
	</head>

	<body>

		<?php
			function calcularIPRF($salario)	{

				$imposto = 0;

				if($salario <= 1903.98) {
					$imposto =0;

				}else if($salario >= 1903.99 && $salario <= 2826.65) {
					$imposto = ($salario * 7.5) / 100;

				}else if($salario >= 2826.66 && $salario <= 3751.05) {
					$imposto = ($salario * 15) / 100;

				}else if($salario >= 3751.06 && $salario <= 4664.08) {
					$imposto = ($salario * 22.05) / 100;

				}else {
					$imposto =($salario * 27.5) / 100;
				}

				return $imposto;
			}

			echo calcularIPRF(5000);
		?>

	</body>
</html>