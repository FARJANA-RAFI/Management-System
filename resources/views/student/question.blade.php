

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

 ?>

@extends('layouts.master')

@section('content')
	<style>
		body{
			background-color: #ADD8E6;
		}
		.question_style{
			margin-top: -13px;
			font-size: 17px;
		}
	</style>

	<div class="page-content">
		<div class="container">
		<div class="row">
			<div class="col-md-10 offset-md-1 bg-light mt-5 p-3 shadow">
				<h4 class="text-info font-weight-bold">Assignment</h4>
					<hr>
					<?php 
						$str ="SELECT DISTINCT g.group_name, (SELECT q.question FROM groups AS q WHERE q.group_name = g.group_name ORDER BY RAND() LIMIT 1) AS question FROM groups AS g GROUP BY group_name";
						$result = mysqli_query($conn, $str);
						while($row = mysqli_fetch_array($result)){
					?>

					<div class="question_style"><span class="text-danger">Group : </span><?= $row['group_name']; ?></div><br>
					<div class="question_style mb-3"><span class="text-info">Question : </span><?= $row['question']; ?></div><br>
						
					<?php
						}
					?>		
			</div>
		</div>
	</div>
	</div>
	@stop

