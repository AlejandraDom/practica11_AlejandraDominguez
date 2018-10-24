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
			<h3>INGRESAR</h3>
			<form method="post" class="">
			<fieldset>
			<legend>ENTRAR</legend>
			<label for="username">Username</label>
			<input  id="ejemplo" type="text" name="username" id="username" value="<?php echo $_REQUEST["username"]; ?>">
			<font color="red"><?php echo $errors["username"]; ?></font>
			<br>
			<label for="password">Password</label>
			<input type="password" name="password" id="password">
			<font color="red"><?php echo $errors["password"]; ?></font>
			<br>
			<input type="hidden" name="page" value="login">
			<input type="hidden" name="caller" value="self">
			<input type="submit" value="ENTRAR" class="login loginmodal-submit">

		</fieldset>
	</form>
	</div>
</div>
<?php
	}
	else
	{
?>
		<form method="post" >
			<input type="hidden" name="username" id="username" value="<?php echo $_REQUEST["username"]; ?>">
			<input type="hidden" name="password" id="password" value="<?php echo $_REQUEST["password"]; ?>">
			<input type="hidden" name="page" value="home">
		</form>
		<script>
			document.forms[0].submit();
		</script>
<?php
	}
?>

<?php
	include_once "footer.php";
?>
