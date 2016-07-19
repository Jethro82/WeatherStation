<Title>JPF Weather Station -
<?php
	$Year=htmlspecialchars($_REQUEST['y']);
	$Month=htmlspecialchars($_REQUEST['m']);
	echo $Year.'-'.$Month.'</Title>';
	include '../Menu.htm';
	echo 'For '.$Year.' in '.$Month.'<br>';
	echo '<table width=80% align=center><td>Month<td>Average<td>High<td>Low<tr>';
	$GroupBy='Date';
	$Condition='Year(Time)="'.$Year.'" and MonthName(Time)="'.$Month.'"';
	$url='Date.php?d=';
	include '../ResultMerge.php';
?>
</table>