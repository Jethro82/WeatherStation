<?php
	include '../SQLConnect.txt';
	echo '<Table width=80% align=center>'.
	 '<td>Reading Time<td>Temperature<td>Reading Type<tr>';	
	$Query='select * from tblTemp where '.$Condition;
	$Result=mysql_query($Query);
	if ($Result){
		while ($Row=mysql_fetch_array($Result)){
			echo '<td>'.$Row['Time'].
			 '<td>'.$Row['Temp'];
			if ($Row['ReadingType']=='A'){
				echo '<td>Automatic';
			}else{
				echo '<td>Remote';
			}
			echo '<tr>';
		}
	}	
?>
</table>