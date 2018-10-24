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
	<h3>REGISTRO DE USUARIO</h3>
	<form method="post" class="col-md-12,col-lg-12">
		<fieldset>
			<legend class="h3 my0" >REGISTRARSE</legend>
			<label for="name">Nombre</label>
			<input type="text" name="name" id="name" value="<?php echo $_REQUEST["name"]; ?>">
			<font color="red"><?php echo $errors["name"]; ?></font>
			<br>
			<label for="username">Username</label>
			<input type="text" name="username" id="username" value="<?php echo $_REQUEST["username"]; ?>">
			<font color="red"><?php echo $errors["username"]; ?></font>
			<br>
			<label for="password">Password</label>
			<input type="password" name="password" id="password">
			<font color="red"><?php echo $errors["password"]; ?></font>
			<br>
			<input type="hidden" name="page" value="register">
			<input type="hidden" name="caller" value="self">
			<input type="submit" value="GUARDAR" class="login loginmodal-submit">
		</fieldset>
	</form>
	</div>
</div>
<?php
	}
	else
	{
?>
	<h3>Registration Successful</h3>
<?php
	}
?>

<?php
	include_once "footer.php";
?>
