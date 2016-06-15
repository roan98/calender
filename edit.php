<?php
	require_once "edit.logic.php";
	include "common/header.php";
?>

<h1>verjaardag wijzigen</h1>
<form method="post">
	<div>
		<input type="hidden" name="id" value="<?=$birthdays['id']?>">
		<label for="name"><p>persoon:</p></label>
		<input type="text" id="name" name="name" value="<?=$birthdays['person']?>">
	</div>
	datum:
	<select name="day" id="day">
	<?php
	for($i=1; $i < 32; $i++):
	?>
		<option value="<?=$i?>" <?php if($i == $birthdays['day']){?>selected<?php }?>><?=$i?></option>
	<?php
	endfor;
	?>
			</select>
	<select name="month" id="month">
	<?php
	for($m=1;$m < 13; $m++):
	?>
			<option value="<?=$i?>" <?php if($m == $birthdays['month']){?>selected<?php }?>><?=$m?></option>
	<?php
	endfor;
	?>
			</select>
	<select name="year" id="year">
	<?php
	for($i=date("Y"); $i >= 1900; $i--):
	?>
				<option value="<?=$i?>" <?php if($i == $birthdays['year']){?>selected<?php }?>><?=$i?></option>
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