<?php 

	class Project {
		// private $id;
		private $name;
		private $owner;

		private $users;
		private $tasks;
		private $bugs;

		function constructor($name, $owner) {
			$this->name = $name;
			$this->owner = $owner;
		}

		public function add_users() {}
		public function add_tasks() {}
		public function add_bugs() {}

		public function get_users() { return $users; }
		public function get_tasks() { return $tasks; }
		public function get_bugs() { return $bugs; }

	}

 ?>