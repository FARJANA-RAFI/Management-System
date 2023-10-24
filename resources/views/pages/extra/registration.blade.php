
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SEISDL Project 1</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet"> 
    <style>
      body{
        background-color: #263238;
        color: #fff;
      } 
    </style>
 </head>

  <body>
  <div class="page-content">
    <div class="container text-white mt-4 mb-5">
    <div class="row">
      <div class="col-md-10 offset-md-1 font-weight-bold">
        <h1 class="mt-2 mb-4">User Registration</h1>

        <form action="" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control rounded-0" name="name" >
          </div>

          <div class="form-group">
            <label>Email Address</label>
            <input type="email" class="form-control rounded-0" name="email" >
          </div>

          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control rounded-0" name="password" >
          </div>

          <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" class="form-control rounded-0" name="confirm_password" >
          </div>

          <div class="form-group radio-btn">
            <label class="mr-3">Gender: </label>
            <input type="radio" name="gender" value="male" required id="male">
            <label for="male">Male</label>
            <input type="radio" class="ml-3" name="gender" value="female" id="female">
            <label for="female">Female</label>
          </div>

          <div class="form-group">
            <label>Date of Birth</label>
            <input type="date" class="form-control rounded-0" name="date_of_birth" >
          </div>

          <!-- <div class="form-group radio-btn">
            <label class="mr-3">User Type: </label>
            <input type="radio" name="user_type" value="admin" id="admin" required> 
            <label for="admin">Admin</label>
            <input type="radio" class="ml-3" name="user_type" value="teacher" id="teacher">
            <label for="teacher">Teacher</label>
          </div> -->

          <div class="form-group">
            <input type="submit" class="btn btn-primary" name="submit" value="Submit" >
          </div>
        </form>

        <?php 
        if(isset($_POST['submit'])){

          $name = $_POST['name'];
          $email = $_POST['email'];
          $password = md5($_POST['password']);
          $confirm_password = md5($_POST['confirm_password']);
          $gender = $_POST['gender'];
          $date_of_birth = $_POST['date_of_birth'];
          $user_type = 'teacher';


          if ($password !== $confirm_password) {
            echo "Password not matched";
          }

         else{
             $data_insert = "INSERT INTO users(name, email, password, gender, date_of_birth, user_type) VALUES ('$name', '$email', '$password', '$gender', '$date_of_birth' , '$user_type')";

            if(mysqli_query($conn, $data_insert)){
              echo "Successfully Registered. After admin approved you can login.";
              // header('location: index.php');
            }
         }
        }
    ?>

      </div><!-- col-md-10 -->
    </div><!-- row -->
  </div><!-- Container -->
  </div>
   

    
  
