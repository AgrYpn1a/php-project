<?php 
  $style_sheet = '../styles/main.css';
	$activePage = 'home';

	session_start();
	if(!isset($_SESSION['name']))
    	header('Location: '.'../index.php');

    if(isset($_POST['addProject'])) {
    	header('Location: '.'addProject.php');
    }
 ?>

<?php include("../templates/header.php") ?>
<div class="container" style="padding-top:15%;">
	<h2 align="center">Hello, <?php echo $_SESSION['name']; ?></h2>
	<form method="POST" align="center">
        <button class="btn btn-outline-info my-2 my-sm-0" type="submit" name="addProject">Add Project</button>
	</form>
</div>
<?php include("../templates/footer.php") ?>
