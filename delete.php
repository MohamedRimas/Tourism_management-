<?php
	session_start();
	include_once('book_form.php');

	if(isset($_GET['id'])){
		$sql = "DELETE FROM book_form WHERE id = '".$_GET['id']."'";

		//use for MySQLi OOP
		if($connection->query($sql)){
			$_SESSION['success'] = 'packages details deleted successfully';
		}
	
		
		else{
			$_SESSION['error'] = 'Something went wrong in deleting member';
		}
	}
	else{
		$_SESSION['error'] = 'Select member to delete first';
	}

	header('location:package_book.php');
?>