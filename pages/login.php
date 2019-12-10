<?php 

  // TODO Miljan
  // handle login
?>

<?php include("../templates/header.php"); ?>

<div class="container" style="width: 40%; margin-top: 20%;">
  <h2 align="center" style="margin-bottom: 25px">Please login</h2>
  <form method="POST">
    <!-- Name -->
    <div class="form-group">
      <label for="username">Name</label>
      <input type="text" class="form-control" id="username" aria-describedby="userhelp" name="username" placeholder="Username">
    </div>
    <!-- Password -->
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div align="center">
      <button name="submit" type="submit" class="btn btn-primary">Login</button>
    </div>
  </form>
</div>

<?php include("../templates/footer.php"); ?>
