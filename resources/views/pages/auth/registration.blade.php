<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SEISDL Project 1</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <style>
    body {
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
                    <h1 class="mt-2 mb-4">Teacher Registration</h1>

                    <form action="{{ URL::to('add_teacher') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <!-- registration succeded message -->
                        <div class="result">
                            @if(Session::get('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                            @endif
                        </div><!-- registration succeded message end-->

                        <!-- registration failed message -->
                        <div class="result">
                            @if(Session::get('fail'))
                            <div class="alert alert-success">
                                {{ Session::get('fail') }}
                            </div>
                            @endif
                        </div><!-- registration failed message end-->

                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control rounded-0" name="name" value="{{old('name')}}">
                            <span class="text-danger">@error('name'){{$message}}@enderror </span>
                        </div>

                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" class="form-control rounded-0" name="email" value="{{old('email')}}">
                            <span class="text-danger">@error('email'){{$message}}@enderror </span>
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control rounded-0" name="password">
                            <span class="text-danger">@error('password'){{$message}}@enderror </span>
                        </div>

                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control rounded-0" name="confirm_password">
                            <span class="text-danger">@error('confirm_password'){{$message}}@enderror </span>
                        </div>

                        <div class="form-group radio-btn">
                            <label class="mr-3">Gender: </label>
                            <input type="radio" name="gender" value="male"
                                {{ (old('gender') == 'male') ? 'checked' : '' }}> Male
                            <input type="radio" class="ml-3" name="gender" value="female"
                                {{ (old('gender') == 'female') ? 'checked' : '' }}> Female
                            <span class="text-danger">@error('gender'){{$message}}@enderror </span>
                        </div>

                        <div class="form-group">
                            <label>Date of Birth</label>
                            <input type="date" class="form-control rounded-0" name="date_of_birth"
                                value="{{old('date_of_birth')}}">
                            <span class="text-danger">@error('date_of_birth'){{$message}}@enderror </span>
                        </div>

                        <!-- <div class="form-group radio-btn">
            <label class="mr-3">User Type: </label>
            <input type="radio" name="user_type" value="admin" id="admin" required> 
            <label for="admin">Admin</label>
            <input type="radio" class="ml-3" name="user_type" value="teacher" id="teacher">
            <label for="teacher">Teacher</label>
          </div> -->

                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                        </div>

                        <a href="login">I already have an account!</a>
                    </form>
                </div><!-- col-md-10 -->
            </div><!-- row -->
        </div><!-- Container -->
    </div>