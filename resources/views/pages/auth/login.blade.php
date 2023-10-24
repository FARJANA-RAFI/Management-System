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
            <form action="{{ URL::to('user_login') }}" method="POST">
                @csrf

                <!-- login failed message -->
                <div class="result">
                    @if(Session::get('fail'))
                    <div class="alert alert-danger">
                        {{ Session::get('fail') }}
                    </div>
                    @endif
                </div><!-- login failed message end-->

                <input type="email" class="fadeIn second text-left" name="email" value="{{ old('email') }}"
                    placeholder="Email Address">
                <br>
                <!-- validating message email -->
                <span class="text-danger">
                    @error('email'){{$message}}@enderror
                </span><!-- validating message email end -->

                <input type="password" class="fadeIn third mb-3 text-left" name="password" placeholder="Password">
                <!-- validating message password -->
                <br>
                <span class="text-danger">
                    @error('password'){{$message}}@enderror
                </span><!-- validating message password end -->

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