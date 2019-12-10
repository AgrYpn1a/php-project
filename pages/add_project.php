<?php 

  // TODO Miljan
  // Add project

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