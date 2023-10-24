
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
 
@extends('layouts.master')

@section('content')
	<div class="page-content" style="background-color: #353750;">
		<!-- showing data from database -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- <div>
					<h2 class="mt-4 mb-4 text-light">Create New Group</h2>
					 <a class="btn btn-info" href="assignment.php">Add Group</a>
				</div> -->

				
				<h1 class="mt-4 mb-5 text-light">List of all Question</h1>
				
				<table class="table table-dark text-center">
					<thead>
						<tr class="bg-danger">
							<th>Group Name</th>
							<th>Question</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							$str = "SELECT * FROM groups"; 
							$result = mysqli_query($conn, $str);
							while($row = mysqli_fetch_array($result)){
						?>
							
						<tr>
							<td><?php echo $row['group_name']; ?></td>
							<td><?php echo $row['question']; ?></td>
							<td>
								<a class="btn btn-success" href="edit_question.php?id=<?php echo $row['id'] ?>">Edit</a>
								<a class="btn btn-warning" data-toggle="modal" data-target="#myModal<?php echo $row['id'] ?>">Delete</a>
								<!-- Modal Start -->
								<div class="modal fade" id="myModal<?php echo $row['id'] ?>">
								  <div class="modal-dialog">
								    <div class="modal-content">
								      <div class="modal-header">
								        <h5 class="modal-title text-dark">Are you sure to delete <b><?php echo $row['question'] ?></b> ?<h5>
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          <span aria-hidden="true">&times;</span>
								        </button>
								      </div>
								      <div class="modal-footer">
								      	<a href="delete_question.php?id=<?php echo $row['id'] ?>" class="btn btn-danger pl-4 pr-4">YES</a>
								        <button type="button" class="btn btn-success pl-3 pr-3" data-dismiss="modal">NO</button>
								        
								      </div>
								    </div>
								  </div>
								</div>
								<!-- Modal End -->
							</td>
						</tr>

						<?php
							}
						?>
					</tbody>
				</table>
				

			</div><!-- col-md-8 -->
		</div><!-- row -->
	</div><!-- Container -->
	</div>
	@stop
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

