<?php 
	session_start();
	if(!isset($_SESSION['name']))
    	header('Location: '.'../index.php');

  $style_sheet_tags_input = '../styles/bootstrap-tagsinput.css';

  if(!isset($_SESSION['tags']) || $_SESSION['tags'] == NULL)
    $_SESSION['tags'] = array();

  // TODO Handle adding tags from form
  if(isset($_POST['add_tag'])) {
    $tag = $_POST['tag_name'];

    if(!in_array($tag, $_SESSION['tags'])) {
      array_push($_SESSION['tags'], $tag);
    }
  }

 ?>

<?php include("../templates/header.php") ?>
<div class="container" style="width: 60%; padding-top: 20px; padding-bottom: 20px">

	<form method="POST">
  <div class="form-group">
    <label for="exampleFormControlInput1">Project Name</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name of your project" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Project description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
  </div>
  <label for="exampleFormControlTextarea1">Tags</label>
  </form>

  <ul class="list-group" style="margin-bottom: 10px;">
  <?php foreach ($_SESSION['tags'] as $tag) { ?>    
    <li class="list-group-item">
      <?php echo $tag; ?>
      <span class="float-right"> 
        <button type="submit" name="remove" class="btn btn-outline-secondary">Remove</button>
      </span>
    </li>
  <?php } ?>
  </ul>

  <form method="POST">
    <div class="input-group">
        <input type="text" name="tag_name" class="form-control" id="exampleFormControlInput1" placeholder="Tag" required>
        <span class="input-group-btn">
          <button type="submit" name="add_tag" class="btn btn-outline-secondary">Add Tag</button>
        </span>
      </form>
  </div>
</div>
<?php include("../templates/footer.php") ?>