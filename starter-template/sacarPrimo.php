<?php

//var_dump($_POST);
//var_dump($_GET);
$contador=0;
$i=2;
$numeroIngrasdo=$_POST["numero"];
for ($i;$i<$numeroIngrasdo; $i++){
	//echo $i. "<br>";
	if($numeroIngrasdo%$i==0){
		echo "<br>el numero igrasdo es divisible por $i ";
		$contador++;

	}
}
if ($contador==0){
	echo "es primo";

}
else{
	echo "<br>no es primo";
}

?>