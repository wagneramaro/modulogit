<?php 

$num = 5000;

function soma_num (){

	global $num;

	$num += 5;

	echo $num . "<br>";
}


echo $num . "<br>";

soma_num(5 , 4);

?>