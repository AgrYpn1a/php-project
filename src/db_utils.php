<?php
	/* DB UTILS */
	class DBUtils {

		private static $init = false;
		private static $pdo;

		public static function init() {
			global $pdo;
			global $init;

			if(!$init) {
				$init = true;
				$dsn = "mysql:host=46.101.170.205;dbname=project_manager";
				$user = "root";
				$passwd = "r.rv`w)B/](+h\"5P";

				$pdo = new PDO($dsn, $user, $passwd);
			}
		}

		public static function register_user($username, $email, $password) {

			global $pdo;

			$passwordHash = password_hash($password, PASSWORD_DEFAULT);

			$sql = "INSERT INTO users (username, email, password) VALUES ('{$username}', '{$email}', '{$passwordHash}')";

			try {
				return $pdo->query($sql);
			} catch (PDOException $e) {
			 	echo 'Query failed.';
			  return false; 
			} finally { $pdo = NULL; }
		}

		public static function login($username, $password) {
			global $pdo;

			$sql = "SELECT username, password FROM users WHERE username LIKE '{$username}'";

			try {
				$user = $pdo->query($sql)->fetch();

				if($user['username'] != NULL && 
					password_verify( $password, $user['password'])) {
					return true;
				} else return false;
			} catch (PDOException $e) { 
				echo 'Query failed'; 
				return false; 
			} finally { $pdo = NULL; }
		}

		public static function add_project($name, $owner, $description) {
			global $pdo;

			// owner, name, description
			$sql = 
			"INSERT INTO projects (owner, name, description) VALUES ('{$owner}', '{$name}', '{$description}')";

			try {
				return $pdo->query($sql) && DBUtils::add_owner_to_project($owner);
			} catch (PDOException $e) { return false; }
			finally { $pdo = NULL; }
		}

		// Adds owner to the project most recently created.
		// Call this only after creating a project to add owner
		// user in the project_users table.		
		private function add_owner_to_project($username) {
			global $pdo;

			$sql = "SELECT * FROM projects ORDER BY ID DESC";
			$project = $pdo->query($sql)->fetch();
			$project_id = $project['id'];

			if(!$project)
				return false;

			$sql = 
			"INSERT INTO project_users (project_id, user_id) VALUES ('{$project_id}', '{$username}')";

			try {
				return $pdo->query($sql);
			} catch (PDOException $e) { return false; }
			finally { $pdo = NULL; }
		}

		public static function fetch_projects($username) {
			global $pdo;

			$sql = 
			"SELECT user_id, project_id, id, name, description FROM project_users, projects 
				WHERE project_id=id AND user_id='{$username}';";

			try {
				return $pdo->query($sql);
			} catch (PDOException $e) { return false; }
			finally { $pdo = NULL; }
		}
	}

 ?>