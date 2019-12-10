<?php 

include('../src/project.php');
include('../src/db_utils.php');

session_start();

if(!isset($_SESSION['name']))
 header('Location: '.'../index.php');

DBUtils::init();

if(isset($_POST['create_project'])) {
  $owner = $_SESSION['name'];
  $name = $_POST['project_name'];
  $desc = $_POST['project_desc'];

  if(DBUtils::add_project($name, $owner, $desc)) {
    // redirect
    header('Location: '.'projects.php');
  } else {
    echo "An error has occured while trying to add new project.";
  }
}

?>

<?php include("../templates/header.php") ?>
<div class="container" style="width: 60%; padding-top: 20px; padding-bottom: 20px">

	<form method="POST">
    <div class="form-group">
      <label for="exampleFormControlInput1">Project Name</label>
      <input type="text" name="project_name" class="form-control" id="exampleFormControlInput1" placeholder="Name of your project" required>
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Project description</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" name="project_desc" rows="3" required></textarea>
    </div>
    <div>
    </div>
    <div style="margin-top: 20px;">
      <button type="submit" name="create_project" class="btn btn-primary">Create</button>
    </div>
  </form>
</div>
</div>
<?php include("../templates/footer.php") ?>