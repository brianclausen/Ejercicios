<head>
	<title>Ejercicio N°4</title>
</head>
<?php

echo "<h1>"."La fecha actual es: ".date("d S F, Y")."<br>"."</h1>";

$mes=intval(date("n"));
$dia=intval(date("j"));

switch($mes)
{
	case 1:
		echo "Estamos en Verano";
		break;
	case 2:
		echo "Estamos en verano";
		break;
	case 3:
		if($dia<21)
			echo "Estamos es verano";
		else
			echo "Estamos en Otoño";
		break;
	case 4:
		echo "Estamos en Otoño";
		break;
	case 5:
		echo "Estamos en Otoño";
		break;
	case 6:
		if($dia<22)
			echo "Estamos en otoño";
		else
			echo "Estamos en Invierno";
		break;
	case 7:
		echo "Estamos en Invierno";
		break;
	case 8:
		echo "Estamos en Invierno";
		break;
	case 9:
		if($dia<24)
			echo "Estamos en Invierno";
		else
			echo "Estamos en Primavera";
		break;
	case 10:
		echo "Estamos en Primavera";
		break;
	case 11:
		echo "Estamos en Primavera";
		break;
	case 12:
		if($dia<22)
			echo "Estamos en Primavera";
		else
			echo "Estamos en Verano";
		break;
}

?>