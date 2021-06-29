<?php
	require_once 'conn.php';
 
	if(ISSET($_POST['save'])){
		$title = addslashes($_POST['title']);
		$authors = addslashes($_POST['authors']);
		
 
		mysqli_query($conn, "INSERT INTO `blog` VALUES('', '$authors', '$title')") or die(mysqli_error());
 
		header('location: index.php');
 
	}
?>