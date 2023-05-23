<?php
	session_start();
	include_once('book1_form.php');

	if(isset($_GET['id'])){
		$sql = "DELETE FROM book1_form WHERE id = '".$_GET['id']."'";

		//use for MySQLi OOP
		if($connection->query($sql)){
			$_SESSION['success'] = 'Member deleted successfully';
		}
	
		
		else{
			$_SESSION['error'] = 'Something went wrong in deleting member';
		}
	}
	else{
		$_SESSION['error'] = 'Select member to delete first';
	}

	header('location: index.php');
?>