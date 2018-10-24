<?php 
	include_once "header.php";
	$before_login=true;
	include_once "menu.php";
?>

<?php
	if($status=="before_submission" or $status=="failure")
	{
?>
	<div class="modal-dialog">
		<div class="loginmodal-container">
	<h3>RECUPERAR CONTRASEÑA</h3>
	<form method="post" class="col-md-12,col-lg-12 ">
		<fieldset>
			<legend>Recuperar Contraseña</legend>
			<label for="username">Username</label>
			<input type="text" name="username" id="username" value="<?php echo $_REQUEST["username"]; ?>">
			<font color="red"><?php echo $errors["username"]; ?></font>
			<br>
			<input type="hidden" name="page" value="forgot_password">
			<input type="hidden" name="caller" value="self">
			<input type="submit" value="Recuperar contraseña" class="login loginmodal-submit">
		</fieldset>
	</form>
	</div>
</div>
<?php
	}
	else
	{
?>
		<h3>Please check your mail for new password</h3>
<?php
	}
?>

<?php
	include_once "footer.php";
?>
