<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('backend/css/style.css')}}">
    <style>
    body {
        background: linear-gradient(rgba(0, 0, 0, .7), rgba(0, 0, 0, .7)),
        url('{{asset('backend/images/1.jpg')}}') center no-repeat;
        background-size: cover;
    }
    </style>

</head>

<body>

    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="fadeIn first my-4 text-dark">
                <h1>LOGIN</h1>
            </div>

            <!-- Login Form -->
            <form action="{{ URL::to('home') }}" method="POST">
                @csrf
                <input type="email" class="fadeIn second text-left" name="email" placeholder="Email Address">

                <input type="password" class="fadeIn third mb-3 text-left" name="password" placeholder="Password">

                <input type="submit" name="submit" class="fadeIn fourth" value="Log In">
            </form>

            <!-- Remind Passowrd -->
            <div id="formFooter" class="text-right">
                <a class="btn btn-info text-right" href="{{URL::to('register')}}">SIGN UP</a>
            </div>

        </div>
    </div>

</body>

</html>

<?php 
  if (isset($_POST['submit'])) {
      $email = $_POST['email'];
      $password = md5($_POST['password']);

      $select_user = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
      $result = mysqli_query($conn, $select_user); 
      $user = mysqli_fetch_array($result);

    if(($user) && ($user['status'] == 'active')){
        $user_id = $user['id'];
        $username = $user['name'];
        $user_email = $user['email'];
        $user_type  = $user['user_type'];

        // session_start();
        // $_SESSION['user_id'] = $user_id;
        // $_SESSION['username'] = $username;
        // $_SESSION['user_email'] = $user_email;
        // $_SESSION['user_type']  = $user_type;

        // header("location: main.php");
    }
 
  }
?>