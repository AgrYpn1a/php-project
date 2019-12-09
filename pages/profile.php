<?php 
	$activePage = 'profile';

	session_start();
	if(!isset($_SESSION['name']))
    	header('Location: '.'../index.php');
 ?>

<?php include("../templates/header.php") ?>
<div class="container" style="padding-top:20%;">
	<h2 align="center">User profile</h2>
</div>
<?php include("../templates/footer.php") ?>