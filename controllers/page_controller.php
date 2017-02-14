<?php
	class PageController
	{
		public function home()
		{
			$test1 = 'test 1';
			$test2 = 'test 2';

			require_once("views/pages/home.php");
		}

		public function error()
		{
			require_once("views/pages/error.php");
		}
	}
?>