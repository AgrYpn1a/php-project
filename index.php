<?php 
	$activePage = 'home';
	$style_sheet = 'styles/main.css';

 	// TODO
 	// If logged in, should redirect to home.php
  // header('Location: '.'home.php');
?>

<?php include("templates/header.php") ?>

<div class="container" style="margin-top: 20%;">
	<h3 align="center">Welcome to</h3>
	<div class="h-100 row align-items-center">
		<div class="col">
			<h2 align="center">Project Manager</h2>
		</div>
	</div>
	<div id="auth_buttons" class="h-100 row align-items-center" align="center">
		<div class="col">
			<a href="/pages/login.php">
				<button type="button" class="btn btn-link">
					Login
				</button>
			</a>
			<a href="/pages/register.php">
				<button type="button" class="btn btn-primary">
					Register
				</button>
			</a>
		</div>
	</div>
</div>

<?php include("templates/footer.php") ?>