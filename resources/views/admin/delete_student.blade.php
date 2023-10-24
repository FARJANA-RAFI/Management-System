
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
	$student_id = $_REQUEST['id'];
	$img_name = $_REQUEST['filename'];
	
	$data_delete = "DELETE FROM students WHERE id = $student_id";
	
	if (mysqli_query($conn, $data_delete)) {

		unlink('../images/'.img_name);
		header('location: student_info.php');

	}
?>
