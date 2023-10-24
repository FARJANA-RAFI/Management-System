
<?php 
	if(!isset($_SESSION)){ 
        session_start(); 
    }
    
	if(!isset($_SESSION['user_email'])){
		header("location: index.php");
	}


	if(isset($_SESSION['user_type']) && $_SESSION['user_type'] != 'student'){
		header('location: index.php');
	}

	if(isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'student'){
		$username = $_SESSION['username'];

		$sql = "select * from course_enrolled where student_name = '$username' ";
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_array($result); 

		if($row > 0){
			header('location: question.php');
		}
	}

	
				
 ?>