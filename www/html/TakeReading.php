<Title>JPF Weather Staion - Take Reading</Title>
<?php
	include '../Menu.htm';
	echo 'Current Temperature: ';
	echo exec('python /home/pi/Remote_Reading.py');
?>