<?php 
	session_start();
	if(!isset($_SESSION['name']))
    	header('Location: '.'../index.php');

  $style_sheet_tags_input = '../styles/bootstrap-tagsinput.css'

  // TODO Handle adding tags from form

 ?>

<?php include("../templates/header.php") ?>
<div class="container">

	<form method="POST">
  <div class="form-group">
    <label for="exampleFormControlInput1">Project Name</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Name of your project" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Project description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
  </div>
  <label for="exampleFormControlTextarea1">Tags</label>

  <ul class="list-group" style="margin-bottom: 10px;">
    <?php // TODO dynamically list all tags ?>
    <li class="list-group-item">Tag1</li>
  </ul>

  <div class="input-group">
      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Tag" required>
      <span class="input-group-btn">
        <button type="submit" name="add_tag" class="btn btn-outline-secondary">Add Tag</button>
      </span>
  </div>
</form>
</div>
<?php include("../templates/footer.php") ?>