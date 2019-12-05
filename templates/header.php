<!DOCTYPE html>
<html>
<head>
	<title>Project Manager</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo $style_sheet ?>">

</head>
<body>

<!-- TODO Check if user is logged in -->
<?php if (true): ?>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?php echo $activePage == 'home' ? 'active' : ''; ?>">
        <a class="nav-link" href="/pages/home.php">Home <!-- <span class="sr-only">(current)</span> --></a>
      </li>
      <li class="nav-item <?php echo $activePage == 'projects' ? 'active' : ''; ?>">
        <a class="nav-link" href="/pages/projects.php">My Projects</a>
      </li>
      <li class="nav-item <?php echo $activePage == 'profile' ? 'active' : ''; ?>">
        <a class="nav-link" href="/pages/profile.php">Profile</a>
      </li>
    </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn my-2 my-sm-0" type="submit">Search</button>
        <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Logout</button>
      </form>
<!--       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>

 -->  </div>
</nav>
<?php endif; ?>
