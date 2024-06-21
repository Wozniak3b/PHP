<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formularz</title>
</head>
<body>
	<form action="skrypt.php" method="POST">
		Imię: <input type="text" name="imie">
		Nazwisko: <input type="text" name="nazwisko">
		Login: (2 duże litery,3 małe, 1 cyfra) <input type="text" name="login">
		<br>
		<b>Adres: </b><br>
		Ulica: <input type="text" name="adres">
		Numer mieszkania: <input type="text" name="adres2">
		Miasto: <input type="text" name="miasto">
		Kod Pocztowy: <input type="text" name="kod">
		Telefon: <input type="text" name="tel">
		Pesel: <input type="text" name="pesel">
		Mail: <input type="text" name="mail">
		Strona www: (cały link) <input type="text" name="strona">
		<input type="submit" name="wyslij" value="Wyślij">
	</form>
</body>
</html>