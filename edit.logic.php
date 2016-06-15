<?php
	if ($_SERVER["REQUEST_METHOD"] == "GET"):
		$species = NULL;
		if (isset($_GET['id'])):
			// Get Patient for id
			$db = new mysqli('localhost','root','','calendar');
			$id = $db->escape_string($_GET["id"]);
			
			$query = "select * from birthdays where id=$id";
			$result = $db->query($query);
		
			$birthdays = $result->fetch_assoc();		
		endif;
		if ($birthdays == NULL):
			// No patient found
			http_response_code(404);
			include("common/not_found.php");
			exit();
		endif;
	elseif ($_SERVER["REQUEST_METHOD"] == "POST"):
		$db = new mysqli('localhost','root','','calendar');
		
		// Prepare data for update
		$id = $db->escape_string($_POST["id"]);
		$person = $db->escape_string($_POST["name"]);
		$day = $db->escape_string($_POST["day"]);
		$month = $db->escape_string($_POST["month"]);
		$year = $db->escape_string($_POST["year"]);
		
		// Prepare query and execute
		$query = "UPDATE birthdays
		SET person='$person', day='$day', month='$month', year='$year' 
		WHERE id=$id";
		$result = $db->query($query);
	
    // Tell the browser to go back to the index page.
    header("Location: ./");
    exit();
	endif;

?>