<?php


	$dirs = array_diff(scandir(__DIR__.'\..\php'), array('..', '.'));
	foreach ($dirs as $file){
		$file = __DIR__.'\..\php\\'.$file;
		$file_contents = file_get_contents($file);
		$file_contents = str_replace("env.php", "env.local.php", $file_contents);
		file_put_contents($file, $file_contents);
	}

	echo 'Changed to local env';
