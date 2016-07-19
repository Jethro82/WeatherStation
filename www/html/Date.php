<Title>JPF WeatherStation - 
<?php
	$Date=$_REQUEST['d'];
	echo $Date.'</Title>';
	include '../Menu.htm';
	echo 'Temperatures on '.$Date.'<br>';
	$Condition='Date(Time)="'.$Date.'"';
	include '../Day.php';

?>