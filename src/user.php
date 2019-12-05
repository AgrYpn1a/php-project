<?php 

	class User {
		public $username;
		public $name;
		public $lastname;
		public $email;
		public $password;

		// Array of all projects
		public $projects = Array();

		// String url
		public $profilePicture = "";

		function constructor($username, $email, $password) {
			$this->username = $username;
			$this->email = $email;
			$this->password = $password;
		}
	}

 ?>