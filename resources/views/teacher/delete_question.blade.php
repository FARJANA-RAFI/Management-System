

<?php 
	if(!isset($_SESSION)){ 
        session_start(); 
    }
    
	if(!isset($_SESSION['user_email'])){
		header("location: index.php");
	}

	if(isset($_SESSION['user_type']) && $_SESSION['user_type'] != 'teacher'){
		header('location: index.php');
	}
 ?>
 
<?php 
	$group_id = $_REQUEST['id'];
	$data_delete = "DELETE FROM groups WHERE id = $group_id";
	
	if (mysqli_query($conn, $data_delete)) {

		header('location: all_question.php');
	}
?>