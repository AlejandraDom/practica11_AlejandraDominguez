<?php
	if($before_login)
	{
?>

<nav>
	<ul>

	<li><a href="index.php?page=index" >INICIO</a></li>
	<li><a href="index.php?page=register">REGISTRARME</a></li>
	<li><a href="index.php?page=login">ENTRAR</a></li>
	<li><a href="index.php?page=forgot_password">CONTRASEÑA</a></li>
	</ul>
</nav>

<?php
	}
	else if($after_login)
	{
?>

<nav>
	<ul>
	<li><a href="index.php?page=home">Home</a></li>
	<li><a href="index.php?page=profile">Profile</a></li>
	<li><a href="index.php?page=book_add">Add Book</a></li>
	<li><a href="index.php?page=book_list">List Book</a></li>
	<li><a href="index.php?page=logout">Logout</a></li>
	</ul>
</nav>

<?php
	}
?>
