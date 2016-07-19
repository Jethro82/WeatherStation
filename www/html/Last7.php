<Title>JPF Weather Station - Last Week</Title>
<?php
	include '../Menu.htm';
	echo 'Last Week<br>';
	echo '<Table width=80% align=center><td>Date<td>Average<td>High<td>Low<tr>';
	$GroupBy='DATE';
	$Condition='Time>ADDDATE(Now(),-7)';
	$url='Date.php?d=';
	include '../ResultMerge.php';
?>
</table>