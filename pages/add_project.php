<?php 
	session_start();
	if(!isset($_SESSION['name']))
    	header('Location: '.'../index.php');


 ?>

<?php include("../templates/header.php") ?>
<div class="container" style="padding-top:20%;">
	<h2 align="center">New Project</h2>
	<form action="POST">
		<label>Project name:</label>
 		<input type="text" name="name">
 		
	</form>
</div>
<?php include("../templates/footer.php") ?>