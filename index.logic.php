<?php 
	$db = new mysqli('localhost','root','','calendar');

	$sql = "SELECT id, person, day, month, year 
	FROM birthdays
	ORDER BY month, day, year";

    $result = mysqli_query($db, $sql);

	$birthdays = $result->fetch_all(MYSQLI_ASSOC);
?>