<?php 
	$activePage = 'projects';

	session_start();
	if(!isset($_SESSION['name']))
    	header('Location: '.'../index.php');
 ?>

<?php include("../templates/header.php") ?>
<div class="container" style="padding-top:20%;">
	<h2 align="center">Projects</h2>
</div>
<?php include("../templates/footer.php") ?>
