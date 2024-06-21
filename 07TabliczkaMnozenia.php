<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<style> td { border: 1px solid black; padding: 0.5em; width: 0.7em; text-align: center; } </style>		

<table>
	<tr style="background-color: black; color: white;">
		<td></td>
<?php
	for($i=1; $i<=10;$i++){
		echo "<td>$i</td>";
	}
?>


<?php
	$wynik=0;
	for($i=1;$i<=10;$i++){
		echo '<tr>';
		echo '<td style="background-color: black; color: white;">';
		echo "$i";
		echo '</td>';
		for($j=1;$j<=10;$j++){
			$wynik=$i*$j;
			echo '<td>';
			echo $wynik;
			echo '</td>';
		}
		echo '</tr>';
	}

?>
</table>

</body>
</html>

