
<?php 
	if(!isset($_SESSION)){ 
        session_start(); 
    }
    
	if(!isset($_SESSION['user_email'])){
		header("location: index.php");
	}

	if(isset($_SESSION['user_type']) && $_SESSION['user_type'] != 'admin'){
		header('location: index.php');
	}
 ?>
 
<?php 
	$session_id = $_REQUEST['id'];
	$data_delete = "DELETE FROM sessions WHERE id = $session_id";
	
	if (mysqli_query($conn, $data_delete)) {

		header('location: session.php');
	}
?>