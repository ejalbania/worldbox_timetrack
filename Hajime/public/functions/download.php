<?php 
	if (isset($_POST['filename'])) {
		$file = $_POST['filename'];
		header('Content-type: application/zip');
		header('Content-disposition: attachment; filename="'.$file.'"');
		readfile('../../app_installers/' . $file);
		exit();
	}
 ?>