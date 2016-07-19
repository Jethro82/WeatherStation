<Title>JPF Weather Station - by Calendar Year</Title>
<?php
	include '../Menu.htm';
	echo 'By Calendar Year<br>';
	$GroupBy='Year';
	$Condition='ReadingType="A" or ReadingType="R"';
	$url='Year.php?y=';
	echo '<table width=80% align=center><td>Year<td>Average<td>High<td>Low<tr>';
	include '../ResultMerge.php';
?>
</table>