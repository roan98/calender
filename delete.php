<?php
	require_once "delete.logic.php";
	include "common/header.php";
?>
	<h1>Verjaardag verwijderen</h1>
	<form method="post">
		<input type="hidden" name="id" value="<?=$birthdays['id']?>">
		<p>Weet je zeker dat je de verjaardag van <?=$birthdays['person']?> op <?=$birthdays['day']?> <?=$months[$birthdays['month']]?> <?=$birthdays['year']?> wilt verwijderen?</p>
		<input type="submit" name="confirmed" value="Ja">
		<input type="submit" name="canceled" value="Nee">
	</form>
