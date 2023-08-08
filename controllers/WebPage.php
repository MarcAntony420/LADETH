<?php

	class WebPageController {

		public function index(){
			require_once "views/page/page.php";
		}

		public function policies(){
			require_once "views/page/policies.php";
		}

		public function login(){
			require_once "views/page/login.php";
		}

		public function register(){
			require_once "views/page/register.php";
		}

	}
?>
