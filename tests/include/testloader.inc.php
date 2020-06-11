<?php
require "../include/websitedata.inc.php";
require "../include/header.inc.php";
require "../include/footer.inc.php";


spl_autoload_register('testLoader');

	function testLoader($className) {
		$path = "../../classes/";
		$scan = scandir($path);
		$ext = ".class.php";
		$max = max(array_keys($scan));

		for ($i=0; $i <= $max; $i++) {
			$fullPath = $path . $scan[$i] . "/" . $className . $ext;

			if (file_exists($fullPath)) {
				include_once $fullPath;

			}
		}
	}
