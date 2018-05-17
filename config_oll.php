<?php

$conecta = mysqli_connect('localhost', 'root', '');
mysqli_select_db($conecta, 'uber');

if($conecta==true){
	echo "conectado com sucesso";
	} else{
		echo "falha";
	}
?>