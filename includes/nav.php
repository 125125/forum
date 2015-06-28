<nav>
	<ul>
		<li><a href="?p=home">Home</a></li>
		<li><a href="?p=register">Register</a></li>
		<li><a href="#">Tres</a></li>
		<li><a href="#">Quattro</a></li>
		<li><a href="#">Register</a></li>
		<li><a href="#" class="login">Login</a></li>
	</ul>
</li>
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