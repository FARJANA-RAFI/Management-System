
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
	$id = $_REQUEST['id'];
	$str = "SELECT * FROM groups where id= $id";
	$result = mysqli_query($conn, $str);
	$groups = mysqli_fetch_array($result);
?>
  @extends('layouts.master')

@section('content')
  	<div class="page-content">
  		<div class="container">
		<div class="row">
			<div class="col-md-10 offset-md-1 mt-5">
				<h1 class="mt-4 mb-5">Edit Question</h1>

				<form action="" method="post">
					<div class="form-group">
						<input type="text" value="<?php echo $groups['group_name']?>" class="form-control" name="group_name" >
					</div>

					<div class="form-group">
						<input type="text" value="<?php echo $groups['question']?>" class="form-control" name="question" >
					</div>

					<div class="form-group mt-4 ">
						<input type="submit" class="btn btn-primary pl-4 pr-4" name="submit" value="Update Question" >
						<a href="all_question.php" class="btn btn-success">Cancel</a>
					</div>

				</form>

			</div><!-- col-md-10 -->
		</div><!-- row -->
	</div><!-- Container -->
  	</div>
	  @stop
	<?php
		if(isset($_POST['submit'])){
			$group_name = $_POST['group_name'];
			$question = $_POST['question'];
			$data_update = "UPDATE groups SET group_name='$group_name', question ='$question' WHERE id='$id'";

			if (mysqli_query($conn, $data_update)) {

				header('Location: all_question.php');
			}
		}
	 ?>
 