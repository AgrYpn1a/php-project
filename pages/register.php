<?php
  $style_sheet = '../styles/main.css';

  include('../src/db_utils.php');

  DBUtils::init();

  if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(DBUtils::register_user($username, $email, $password)) {
      echo "Got it! User signed up with {$username}";
      header('Location: '.'login.php');
    } else {
      echo "Error registering user.";
    }
  }
?>

<?php include("../templates/header.php"); ?>

<div class="container" style="width: 50%; margin-top: 20%;">
  <h2 align="center" style="margin-bottom: 25px;">Please register</h2>
  <form method="POST">
    <!-- Name -->
    <div class="form-group">
      <label for="username">Name</label>
      <input type="text" class="form-control" id="username" aria-describedby="userhelp" name="username" placeholder="Username">
    </div>
    <!-- Email -->
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <!-- Password -->
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div align="center">
      <button name="submit" type="submit" class="btn btn-primary">Register</button>
    </div>
  </form>
</div>

<?php include("../templates/footer.php"); ?>
