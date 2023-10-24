
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

	$username = $_SESSION['username'];
 ?>



<?php $__env->startSection('content'); ?>
	<div class="page-content" style="background-color: #353750;">
		<!-- showing data from database -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="mt-4 mb-5 text-light">Enrolled Course</h1>

				<table class="table table-dark text-center">
					<thead>
						<tr class="bg-danger">
							<th>Course Name</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
				<?php 
					$str = "SELECT course_enrolled.*, courses.course_name as course_name  FROM course_enrolled INNER JOIN courses ON course_enrolled.course = courses.id"; 

					$result = mysqli_query($conn, $str);
					$row = mysqli_fetch_array($result);
				?>

					<tr>
						<td><?php echo $row['course_name']; ?></td>
						<td><a class="btn btn-success" href="view_course.php?id=<?php echo $row['id'] ?>">View</a></td>
					</tr>

					</tbody>
				</table>
				

			</div><!-- col-md-8 -->
		</div><!-- row -->
	</div><!-- Container -->
	</div>
	<?php $__env->stopSection(); ?>
	

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SD_final_project\sd_final_rjns\resources\views/student/view_enrolled_course.blade.php ENDPATH**/ ?>