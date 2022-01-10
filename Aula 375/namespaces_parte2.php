<?php 

	require "./bibliotecas/lib1/lib1.php";
	require "./bibliotecas/lib2/lib2.php";

	use B\Cliente; //A

	$c = new Cliente();
	print_r($c); 
	echo $c->__get('nome');