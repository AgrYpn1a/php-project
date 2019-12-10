<?php
	/* DB UTILS */
	class DBUtils {

		private static $init = false;
		private static $pdo;

		/* Call this before using database. */
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
			// TODO Vladimir
		}

		public static function login($username, $password) {
		 	// TODO Vladimir
		}

		public static function add_project($name, $owner, $description) {
			global $pdo;
			// owner, name, description
			$sql = 
			"INSERT INTO projects (owner, name, description) 
			VALUES ('{$owner}', '{$name}', '{$description}')";

			try {
				return $pdo->query($sql) && 
					DBUtils::add_owner_to_project($owner);
			} catch (PDOException $e) { return false; }
			finally { $pdo = NULL; }
		}

		// Adds owner to the project most recently created.
		// Call this only after creating a project to add owner
		// user in the project_users table.		
		private function add_owner_to_project($username) {
			// TODO Miljan
			return true;
		}

		public static function fetch_projects($username) {
			// Luka
		}
	}

 ?>