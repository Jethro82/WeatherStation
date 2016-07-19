<?php
	//Result Merge
	//Remote readings bias the average, but definitely affect Highs and Lows
	//So we perform two select's and merge them
	//Since a reading is taken at midnight anything all dates included in Resutl2 will also be in Result1
	//So no double check is included
	include '../SQLConnect.txt';
	$Query1='select avg(Temp) as Average, '.$GroupBy.'(Time) as '.$GroupBy.' from tblTemp
	 where '.$Condition.' and ReadingType="A" Group by '.$GroupBy.'(Time)';

	$Query2='select min(Temp) as Min, Max(Temp) as Max, '.$GroupBy.'(Time) as '.$GroupBy.' from tblTemp where '.$Condition.' Group by '.$GroupBy.'(Time)';
	$Result1=mysql_query($Query1);
	$Result2=mysql_query($Query2);

	if ($Result1){
		while ($RowFrom2=mysql_fetch_array($Result2)){
			if ($RowFrom1=mysql_fetch_array($Result1)){};
			echo '<td><a href='.$url.$RowFrom1[$GroupBy].'>'.$RowFrom2[$GroupBy].'</a>'.
			 '<td>'.$RowFrom1['Average'].
			 '<td>'.$RowFrom2['Max'].
			 '<td>'.$RowFrom2['Min'].
			 '<tr>';
		}
	}	
?>