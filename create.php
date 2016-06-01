<?php 
	require_once "create.logic.php";
	include "common/header.php";
?>
	<h1>Nieuwe verjaardag</h1>


<form method="post">
	<div>
		<label for="name"><p>Persoon:</p></label>
			<input type="text" id="name" name="name">
	</div>
	datum:
	<select name="day" id="day">
	<?php
	for($i=1; $i < 32; $i++):
	?>
			<option value="<?=$i?>"><?=$i?></option>
	<?php
	endfor;
	?>
	</select>
	<select name="month" id="month">
	<?php
	for($m=1;$m < 13; $m++):
	?>
			<option value="<?=$m?>"><?=$m?></option>
	<?php
	endfor;
	?>
			</select>
	<select name="year" id="year">
	<?php
	for($i=date("Y"); $i >= 1900; $i--):
	?>
				<option value="<?=$i?>"><?=$i?></option>
	<?php
	endfor;
	?>
			</select>



	<div>
		<label></label>
		<input type="submit" name="save">
	</div>
</form>

<?php
	include "common/footer.php";
 ?>