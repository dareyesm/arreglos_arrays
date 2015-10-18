<?php

$array1 = array();
$array2 = array();

$campos = count($_POST)/2;

$contador = 1;

while($contador <= $campos){
	
	$nombreV1 = 'campo'.$contador .'V1';
	$nombreV2 = 'campo'.$contador .'V2';
	
	//isset es para verficar si una variable esta definida o no!
	if(isset($_POST[$nombreV1])){
		$array1[$contador] = $_POST[$nombreV1];
	}
	
	if(isset($_POST[$nombreV2])){
		$array2[$contador] = $_POST[$nombreV2];
	}	
	
	$contador++;
}

echo "Estos son los valores digitados para el array numero 1:";
print_r($array1);
echo "<br>";
echo "Estos son los valores digitados para el array numero 2:";
print_r($array2);

$campos = count($array1);

echo "<br>Numero de campos por array: " . $campos;

$auxiliar = 0;

for($i=1;$i <= $campos;$i++){
	$auxiliar = $array1[$i];
	$array1[$i] = $array2[$i];
	$array2[$i] = $auxiliar;
}

echo "<br> los valores de los vectores han sido intercambiados:<br>";

echo "Estos son los valores digitados para el array numero 1:";
print_r($array1);
echo "<br>";
echo "Estos son los valores digitados para el array numero 2:";
print_r($array2);





?>