<!DOCTYPE html>
<html>
<head>
  <title>Accesso a pagina riservata</title>
</head>

<H2>CONTROLLO CREDENZIALI</H2>

<?php
$nomeutente = $_REQUEST['nomeutente'];
$password = $_REQUEST['password'];

echo "Nome utente: $nomeutente<br>";
echo "Password: $password<br>";

if($nomeutente == "Admin" && $password == "123") {
  echo ("Benvenuto $nomeutente nella pagina riservata del sito!");
} else {
  echo  ("Attenzione: credenziali non corrette.");
}
?>

<br>

	<form action="Esercizio2.html">
	<button type="submit">Indietro</button>
	</form>

</body>
</html>
