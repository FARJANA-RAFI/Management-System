<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<title>Registration</title>
	<style>
		body{ 
			background: url('{{asset('backend/images/bg12.jpg')}}') no-repeat center;
			background: linear-gradient(rgba(0,0,0,.7),rgba(0,0,0,.7)), url('{{asset('backend/images/bg12.jpg')}}') center no-repeat;
    		background-size: cover;
    		height: 100vh;
    		color: #fff;	
			}

			.registration{
				padding-top: 150px;
			}

			h1{
				padding-top: 50px;
			}
	</style>
</head>
<body>
	<div class="wrapper">
		<div class="container ">
			<div class="row">
				<div class="col-md-8 offset-md-2">
					<h1 class="text-center mt-5">User Registration</h1>
					<div class="registration text-center mt-5">
						<a href="user_registration" class="btn btn-info mr-3">Student</a>
						<a href="registration" class="btn btn-info">Teacher</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>