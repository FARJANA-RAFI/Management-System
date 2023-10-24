
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
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Courses</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/sidebar.css">
 </head>

<?php 
	$id = $_REQUEST['id'];
	$str = "SELECT * FROM users where id= $id";
	$result = mysqli_query($conn, $str);
	$user = mysqli_fetch_array($result);

	
	$data_update = "UPDATE users SET status = 'deactive' WHERE id='$id'";

		if (mysqli_query($conn, $data_update)) {
			header('location: manage_users.php');
		} 
?> 

  </body>
</html>