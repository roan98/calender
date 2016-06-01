<?php
    require_once "index.logic.php";
    include "common/header.php";
?>
<head>
<link rel="stylesheet" type="text/css" href="common/main.css">
</head>

<body>

<?php
    foreach($birthdays as $birthday){
?>
        <h1><?=$birthday['month']?></h1>
        <h2><?=$birthday['day']?></h2>
        
    <p>
        <a href="edit.php?id=$id">
        <?=$birthday['person']?> (
        <?=$birthday['year']?>)
        <a href="delete.php?id=$id">x</a>
    </p>


    <?php
    }
?>

   <p><a href="create.php">toevoegen</a></p>




</body>
