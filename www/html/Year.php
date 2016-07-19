<Title>JPF Weather Station -
<?php
	$Year=$_REQUEST['y'];
	echo $Year.'</Title>';
	include '../Menu.htm';
	echo 'For '.$Year.'<br>';
	echo '<table width=80%><td>Year<td>Average<td>High<td>Low<tr>';
	$GroupBy='MonthName';
	$Condition='ReadingType="A" or ReadingType="R"';
	$url='Month.php?y='.$Year.'&m=';
	include '../ResultMerge.php';
?>
</table>