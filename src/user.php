<?php 

	class User {
		private $username;
		private $name;
		private $lastname;
		private $email;
		private $password;

		// Array of all projects
		private $projects = Array();

		// String url
		private $profilePicture = "";

		function constructor($username, $email, $password) {
			$this->username = $username;
			$this->email = $email;
			$this->password = $password;
		}
	}

 ?>