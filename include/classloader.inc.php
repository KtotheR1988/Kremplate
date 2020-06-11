<?php

//EXTERNE DATA IN CLASSLOADER IMPLEMENTEREN, DUS PATH ETC
//OM EVENTUEEL CLASSNAME TE VERANDEREN VOOR INSTANTIERING

spl_autoload_register('classLoader');

function classLoader($className)
{
	$path = $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . "Kremplate" . DIRECTORY_SEPARATOR . "classes" . DIRECTORY_SEPARATOR;
	$scan = scandir($path);
	$className = DIRECTORY_SEPARATOR . $className;
	$ext = ".class.php";
	$max = max(array_keys($scan));

	for ($i=0; $i <= $max; $i++) {
	$fullPath = $path . $scan[$i] . $className . $ext;
		if (file_exists($fullPath)) {
		include_once $fullPath;
		}
	}
}
