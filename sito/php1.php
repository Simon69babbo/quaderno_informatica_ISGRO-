<!DOCTYPE html>
<html>
<body>


<?php
echo ("REGISTRAZIONE");
echo nl2br("\n");
?>

<?php
$nome = $_POST["nome"];
echo ("Nome: ");

$nome = isset($_POST["nome"]) ? $_POST["nome"] : "";
if (!empty($nome)) {
		echo (" $nome - (valore presente)");
	} else {
		echo ("(valore assente)");
}
echo nl2br("\n");
?>


<?php
$cognome = $_POST["cognome"];
echo ("Cognome: ");

$cognome = isset($_POST["cognome"]) ? $_POST["cognome"] : "";
if (!empty($cognome)) {
		echo (" $cognome - (valore presente)");
	} else {
		echo ("(valore assente)");
}

echo nl2br("\n");
?>


<?php
$cf = $_POST["cf"];
echo ("Codice Fiscale: ");

$cf = isset($_POST["cf"]) ? $_POST["cf"] : "";
if (!empty($cf)) {
		echo (" $cf - (valore presente)");
	} else {
		echo ("(valore assente)");
}

echo nl2br("\n");
?>

<?php
$datadinascita = $_POST["datadinascita"];
echo ("Data di nascita: ");

$datadinascita = isset($_POST["datadinascita"]) ? $_POST["datadinascita"] : "";
if (!empty($datadinascita)) {
		echo (" $datadinascita - (valore presente)");
	} else {
		echo ("(valore assente)");
}

echo nl2br("\n");
?>

	<br>

	<form action="Esercizio1.html">
	<button type="submit">Menu Principale</button>
	</form>

</body>
</html>
