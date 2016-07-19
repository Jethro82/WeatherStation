<Title>JPF Weather Station - Last Week</Title>
<?php
	include '../Menu.htm';
	echo 'Last 12 Months<br>';
	echo '<Table width=80% align=center><td>Month<td>Average<td>High<td>Low<tr>';
	$GroupBy='MonthName';
	$Condition='Time>ADDDATE(Now(),-365) and Year(Time)=YEAR(ADDDATE(NOW(),-365))';
	$url='Month.php?y='.(date("Y")-1).'&m=';
	include '../ResultMerge.php';
	$Condition='Time>ADDDATE(Now(),-365) and Year(Time)=YEAR(NOW())';
	$url='Month.php?y='.date("Y").'&m=';
	include'../ResultMerge.php';

?>
</table>