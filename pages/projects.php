<?php 
$activePage = 'projects';

session_start();
if(!isset($_SESSION['name']))
	header('Location: '.'../index.php');

include('../src/project.php');
include('../src/db_utils.php');

DBUtils::init();

$projects = DBUtils::fetch_projects($_SESSION['name']);
?>

<?php include("../templates/header.php") ?>

<div class="container" style="padding-top:5%;">
	<h2 align="center">Projects</h2>

	<div class="row justify-content-between" style="text-align:justify; margin-top: 25px;">

		<?php foreach($projects as $project): ?>		
			<div class="col-md" style="padding: 2%;">
				<div class="card" >
					<div class="card-body">
						<h5 class="card-title">
							<a href="#" class="badge badge-light">
								<h3><?php echo $project['name']; ?></h3>
							</a>
							<p class="card-text">
								<?php echo $project['description']; ?>
							</p>
							<hr>
							<p>
								<div>Tags</div>
								<div>tag1, tag2, tag3</div>
							</p>
							<div style="margin-bottom: 10px;">
								<a href="#" class="btn btn-primary">Edit</a>
							</div>
							<div>
								<a href="#" class="btn btn-outline-secondary">Add tags</a>
								<a href="#" class="btn btn-outline-danger">Add bugs</a>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>		

<!-- 		<div class="col-md" style="padding: 2%;">
			<div class="card" >
				<div class="card-body">
					<h5 class="card-title">Project title</h5>
					<p class="card-text">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vitae sollicitudin mi. Phasellus elementum placerat eros, id eleifend libero. In venenatis lectus est, at faucibus massa euismod quis. Vestibulum auctor consectetur lacus, eu tincidunt urna molestie ut. Suspendisse quis bibendum.
					</p>
					<hr>
					<p>
						<div>Tags</div>
						<div>tag1, tag2, tag3</div>
					</p>
					<a href="#" class="btn btn-primary">Go somewhere</a>
				</div>
			</div>
		</div>
		<div class="col-md" style="padding: 2%;">
			<div class="card" >
				<div class="card-body">
					<h5 class="card-title">Project title</h5>
					<p class="card-text">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vitae sollicitudin mi. Phasellus elementum placerat eros, id eleifend libero. In venenatis lectus est, at faucibus massa euismod quis. Vestibulum auctor consectetur lacus, eu tincidunt urna molestie ut. Suspendisse quis bibendum.
					</p>
					<hr>
					<p>
						<div>Tags</div>
						<div>tag1, tag2, tag3</div>
					</p>
					<a href="#" class="btn btn-primary">Go somewhere</a>
				</div>
			</div>
		</div>
		<div class="col-md"style="padding: 2%;">
			<div class="card" >
				<div class="card-body">
					<h5 class="card-title">Project title</h5>
					<p class="card-text">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vitae sollicitudin mi. Phasellus elementum placerat eros, id eleifend libero. In venenatis lectus est, at faucibus massa euismod quis. Vestibulum auctor consectetur lacus, eu tincidunt urna molestie ut. Suspendisse quis bibendum.
					</p>
					<hr>
					<p>
						<div>Tags</div>
						<div>tag1, tag2, tag3</div>
					</p>
					<a href="#" class="btn btn-primary">Go somewhere</a>
				</div>
			</div>
		</div>
	-->
</div>
</div>
<?php include("../templates/footer.php") ?>
