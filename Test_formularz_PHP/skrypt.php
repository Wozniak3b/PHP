<?php
	$dane='/^[A-ZŁŚ]{1}+[a-ząęńłóżźćś]+$/u';
	$login='/^[A-Z]{2}+[a-z]{3}+[0-9]{1}+$/u';
	$telefon='/^[0-9]{9}+$/u';
	$peselino='/^[0-9]{11}+$/u';
	$kod_pocztowy='/^[0-9]{2}+[-]{1}+[0-9]{3}+$/u';
	



	if(isset($_POST["wyslij"])){
		


		if(!preg_match($dane, $_POST["imie"]) || (!preg_match($dane,$_POST["nazwisko"]))){
			echo "Źle wpisałeś swoje dane (liczby lub brak 1 litery z dużej)"."<br/>";
			header("refresh:2; url=formularz.php");
		}

		if(!preg_match($login, $_POST["login"])){
			echo "Zły login"."<br/>";
			header("refresh:2; url=formularz.php");
		}

		if(!preg_match($dane, $_POST["adres"])){
			echo "Zła ulica (brak duzej litery na poczatku)"."<br/>";
			header("refresh:2; url=formularz.php");
		}

		
		if(!filter_var($_POST["adres2"], FILTER_VALIDATE_INT)){
			echo "Brak/zły numer mieszkania"."<br/>";
			header("refresh:2; url=formularz.php");
		}

		if(!preg_match($dane, $_POST["miasto"])){
			echo "Źle podane miasto (brak dużej litery na początku)"."<br/>";
			header("refresh:2; url=formularz.php");
		}

		if(!preg_match($kod_pocztowy, $_POST["kod"])){
			echo "Zły kod pocztowy"."<br/>";
			header("refresh:2; url=formularz.php");
		}

		
		$telefon2=filter_var($_POST["tel"], FILTER_SANITIZE_NUMBER_INT);
		if(!preg_match($telefon, $telefon2)){
			echo "Zły numer telefonu"."<br/>";
			header("refresh:2; url=formularz.php");
		}

		if(!preg_match($peselino, $_POST["pesel"])){
			echo "Zły pesel"."<br/>";
			header("refresh:2; url=formularz.php");
		}

		if(!filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)){
			echo "Zły adres email"."<br/>";
			header("refresh:2; url=formularz.php");
		}

		if(!filter_var($_POST["strona"], FILTER_VALIDATE_URL)){
			echo "Zła strona internetowa"."<br/>";
			header("refresh:2; url=formularz.php");
		}
	}
	else{
		echo "Wejście na stronę z linku";
		header("refresh:2; url=formularz.php");
		}
?>