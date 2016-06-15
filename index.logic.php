<?php 
	$db = new mysqli('localhost','root','','calendar');

	$sql = "SELECT id, person, day, month, year 
	FROM birthdays
	ORDER BY month, day, year";

    $result = mysqli_query($db, $sql);

	$birthdays = $result->fetch_all(MYSQLI_ASSOC);

		$months = array(
		1 => "januari",
		2 => "februari",
		3 => "maart",
		4 => "april",
		5 => "mei",
		6 => "juni",
		7 => "juli",
		8 => "augustus",
		9 => "september",
		10 => "oktober",
		11 => "november",
		12 => "december"
	);

?>