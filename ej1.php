<head>
<title>Ejercicio N°1</title>
</head>
<?php

$total=1;
$cont=0;

for($i=2;$total<=1000;$i++)
{
	if($total+$i<1001)
	{
		echo $total."+".$i;
		$total=$total+$i;
		echo "=".$total."<br>";
		$cont=$cont +2;
	}
	else
		break;
}
echo "Se sumaron ".$cont." números."

?>