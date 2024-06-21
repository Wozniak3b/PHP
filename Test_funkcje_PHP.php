<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<style> td { border: 1px solid black; padding: 0.5em; text-align: center; width:1em;} </style>
	<table>
		<?php
		echo "<h3>Zadanie 1</h3>";

		function tablice($tablica1,$tablica2){
			if(is_array($tablica1)&&is_array($tablica2)) {

			$wynik1=count($tablica1);
			$wynik2=count($tablica2);

			if($wynik1>$wynik2){
				$tablica3=array_merge($tablica1,$tablica2);
				arsort($tablica3);
				return $tablica3;
			}
			else{
				if($wynik1<$wynik2){
					$tablica3=array_merge($tablica1,$tablica2);
					asort($tablica3);
					return $tablica3;
				}
				else
					echo "Tablice są równe";
			}
		}
		}

		$a2=array(1,2,3);
		$b2=array(12,4,5,7);

		echo "<tr>";

		if(is_array(tablice($a2,$b2))){
			foreach(tablice($a2,$b2) as $liczba){
				echo "<td>";
				echo $liczba;
				echo "</td>";
			}
		echo "</tr>";
		}
	?>

	</table>

	<?php

		echo "<h3>Zadanie 2</h3>";

		function zadanie2($start,$end){
    		$tablica4=array();
    		for($i=$start;$i<=$end;$i++){
        		$tablica4[]=$i;
    		}
    		echo "Suma= ". array_sum($tablica4)."<br/>";
    		return $tablica4;
		}

    	foreach(zadanie2(1,50) as $liczba2)
        	echo $liczba2.",";

	?>
</body>
</html>
