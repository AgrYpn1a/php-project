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
				$dsn = "mysql:host=46.101.170.205;dbname=php_web_test";
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
			}
		}

		public static function login($username, $password) {
			global $pdo;

			$sql = "SELECT username, password FROM users WHERE username LIKE '${username}'";

			try {
				$user = $pdo->query($sql)->fetch();

				if($user['username'] != NULL && 
					password_verify( $password, $user['password'])) {
					return true;
				} else return false;
			} catch (PDOException $e) { 
				echo 'Query failed'; 
				return false; 
			}

		}
	}

 ?>