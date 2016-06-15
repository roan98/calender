<?php
    require_once "index.logic.php";
    include "common/header.php";
?>
<head>
<link rel="stylesheet" type="text/css" href="common/main.css">
</head>

<body>

<?php
	$currentMonth = null;
	$currentDay = null;

    foreach($birthdays as $birthday){
    	if ($currentMonth != $birthday['month']) {
    		echo "<h1>" . $months[$birthday['month']] . "</h1>";
    		$currentMonth = $birthday['month'];
    	}
    	if ($currentDay != $birthday['day']) {
    		echo "<h2>" . $birthday['day'] . "</h2>";
    		$currentDay = $birthday['day'];
    	}
   ?>     
    <p>
        <a href="edit.php?id=<?=$birthday['id']?>">
        <?=$birthday['person']?> (
        <?=$birthday['year']?>)
        <a href="delete.php?id=<?= $birthday['id'] ?>">x</a>
    </p>


    <?php
    }
?>

   <p><a href="create.php">toevoegen</a></p>




</body>
