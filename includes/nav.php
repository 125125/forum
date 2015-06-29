<div class="wrapper">
<nav>
	<ul>
<?php
session_start();
if (!empty($_SESSION['username'])) {
	echo "<li><a href='?p=home'>Home</a></li>";
	echo "<li><a href='#'>Tres</a></li>";
	echo "<li><a href='#'>Quattro</a></li>";
	echo "<li><a href='functions/logout.php'>logout</a></li>";
}else{
	echo "<li><a href='?p=register'>Register</a></li>";
	echo "<li><a href='#' class='login'>Login</a></li>";
}
?>
	</ul>
</nav>
<div id="loginbox">
	<div id="loginform">
		<div id="close" class="login"></div>
		<div id="loginwrapper">
			<form action="functions/login.php" method="POST">
				<input type="text" name="user" placeholder="Username">
				<input type="password" name="pass" placeholder="Password">
				<center><input type="submit" value="Login"></center>
			</form>
		</div>
	</div>
</div>
<script type="text/javascript">
	$('.login').click(function(){
		$('#loginbox').fadeToggle();
	});
</script>